(() => {
    const consentKey = 'np_cookie_consent_v1';
    const consentMaxAge = 1000 * 60 * 60 * 24 * 180;
    let consent = null;
    let bannerForcedOpen = false;

    const cookieSystem = () => document.querySelector('[data-cookie-system]');
    const whatsapp = () => document.querySelector('[data-whatsapp-chat]');

    const readConsent = () => {
        try {
            const raw = window.localStorage.getItem(consentKey);
            if (!raw) return null;

            const parsed = JSON.parse(raw);
            const updatedAt = Number(parsed.updatedAt || 0);

            if (parsed.version !== 1 || typeof parsed.externalMedia !== 'boolean' || !updatedAt || Date.now() - updatedAt > consentMaxAge) {
                window.localStorage.removeItem(consentKey);
                return null;
            }

            return parsed;
        } catch (_) {
            return null;
        }
    };

    const syncExternalMedia = () => {
        const allowed = Boolean(consent?.externalMedia);

        document.querySelectorAll('[data-cookie-media="external"]').forEach(container => {
            const frame = container.querySelector('[data-cookie-frame]');
            const placeholder = container.querySelector('[data-cookie-placeholder]');

            if (allowed) {
                if (frame?.dataset.cookieSrc && frame.getAttribute('src') !== frame.dataset.cookieSrc) {
                    frame.setAttribute('src', frame.dataset.cookieSrc);
                }
                if (frame) frame.hidden = false;
                if (placeholder) placeholder.hidden = true;
                return;
            }

            if (frame) {
                frame.setAttribute('src', 'about:blank');
                frame.hidden = true;
            }
            if (placeholder) placeholder.hidden = false;
        });
    };

    const syncConsentUi = () => {
        const banner = cookieSystem()?.querySelector('[data-cookie-banner]');
        if (!banner) return;

        const showBanner = !consent || bannerForcedOpen;
        banner.hidden = !showBanner;
        document.body?.classList.toggle('np-cookie-banner-visible', showBanner);
    };

    const writeConsent = externalMedia => {
        consent = {
            version: 1,
            necessary: true,
            externalMedia: Boolean(externalMedia),
            updatedAt: Date.now(),
        };
        bannerForcedOpen = false;

        try {
            window.localStorage.setItem(consentKey, JSON.stringify(consent));
        } catch (_) {
            // Keep the choice for the current page if browser storage is unavailable.
        }

        syncConsentUi();
        syncExternalMedia();
    };

    const reopenConsent = () => {
        bannerForcedOpen = true;
        syncConsentUi();
        window.requestAnimationFrame(() => cookieSystem()?.querySelector('[data-cookie-accept]')?.focus());
    };

    const setWhatsAppOpen = open => {
        const root = whatsapp();
        const panel = root?.querySelector('[data-whatsapp-panel]');
        const toggle = root?.querySelector('[data-whatsapp-toggle]');
        if (!root || !panel || !toggle) return;

        panel.hidden = !open;
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        root.classList.toggle('is-open', open);

        if (open) window.requestAnimationFrame(() => root.querySelector('[data-whatsapp-message]')?.focus());
    };

    const initialisePageExperience = () => {
        if (!consent) consent = readConsent();
        syncConsentUi();
        syncExternalMedia();
    };

    document.addEventListener('click', event => {
        const target = event.target instanceof Element ? event.target : null;
        if (!target) return;

        if (target.closest('[data-whatsapp-toggle]')) {
            const panel = whatsapp()?.querySelector('[data-whatsapp-panel]');
            setWhatsAppOpen(Boolean(panel?.hidden));
            return;
        }

        if (target.closest('[data-whatsapp-close]')) {
            setWhatsAppOpen(false);
            return;
        }

        if (target.closest('[data-cookie-accept]')) {
            writeConsent(true);
            return;
        }

        if (target.closest('[data-cookie-reject]')) {
            writeConsent(false);
            return;
        }

        if (target.closest('[data-cookie-settings]')) {
            reopenConsent();
            return;
        }

        if (target.closest('[data-cookie-allow-media]')) {
            writeConsent(true);
            return;
        }

        const root = whatsapp();
        const panel = root?.querySelector('[data-whatsapp-panel]');
        if (root && panel && !panel.hidden && !root.contains(target)) setWhatsAppOpen(false);
    });

    document.addEventListener('submit', event => {
        const form = event.target instanceof HTMLFormElement ? event.target : null;
        if (!form?.matches('[data-whatsapp-form]')) return;

        const message = form.querySelector('[data-whatsapp-message]');
        const status = form.querySelector('[data-whatsapp-status]');
        const text = String(message?.value || '').trim();

        if (!text) {
            event.preventDefault();
            message?.classList.add('is-invalid');
            message?.setAttribute('aria-invalid', 'true');
            if (status) status.textContent = 'Please type a message first.';
            message?.focus();
            return;
        }

        message?.classList.remove('is-invalid');
        message?.removeAttribute('aria-invalid');
        if (status) status.textContent = 'Opening WhatsApp…';
    });

    document.addEventListener('input', event => {
        const field = event.target instanceof HTMLTextAreaElement ? event.target : null;
        if (!field?.matches('[data-whatsapp-message]')) return;
        field.classList.remove('is-invalid');
        field.removeAttribute('aria-invalid');
        const status = field.closest('form')?.querySelector('[data-whatsapp-status]');
        if (status) status.textContent = '';
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') setWhatsAppOpen(false);
    });

    document.addEventListener('livewire:navigated', initialisePageExperience);
    document.addEventListener('DOMContentLoaded', initialisePageExperience, { once: true });
})();

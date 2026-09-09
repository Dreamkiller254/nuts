(() => {
    let navigationStartedAt = 0;
    let hideTimer = null;

    const transition = () => document.querySelector('#np-transition');
    const navigationStatus = () => document.querySelector('#np-navigation-status');
    const headerShell = () => document.querySelector('.site-header-shell');
    const mobileMenu = () => document.querySelector('#site-mobile-menu');
    const menuToggle = () => document.querySelector('.site-menu-toggle');
    const main = () => document.querySelector('#main');

    const pageLabel = (url) => {
        const path = url?.pathname || window.location.pathname;
        const labels = {
            '/': 'Loading home',
            '/about': 'Loading about Nuts Paradise',
            '/products': 'Loading products',
            '/products/macadamias': 'Loading macadamias',
            '/products/cashews': 'Loading cashews',
            '/processing': 'Loading processing',
            '/quality-certification': 'Loading quality and certification',
            '/traceability': 'Loading traceability',
            '/buyers': 'Loading buyer information',
            '/export-markets': 'Loading export markets',
            '/contact': 'Loading contact',
            '/privacy-policy': 'Loading privacy policy',
            '/terms-of-use': 'Loading terms of use',
            '/photography': 'Loading photography credits',
        };

        return labels[path] || 'Loading page';
    };

    const showTransition = (url) => {
        const layer = transition();
        if (!layer) return;

        clearTimeout(hideTimer);
        navigationStartedAt = performance.now();
        const labelText = pageLabel(url);
        const label = layer.querySelector('.np-transition-label');
        if (label) label.textContent = labelText;

        const status = navigationStatus();
        if (status) status.textContent = labelText;
        main()?.setAttribute('aria-busy', 'true');
        layer.classList.add('is-active');
    };

    const hideTransition = () => {
        const layer = transition();
        if (!layer) return;

        const elapsed = navigationStartedAt ? performance.now() - navigationStartedAt : 999;
        const delay = Math.max(0, 150 - elapsed);

        hideTimer = window.setTimeout(() => {
            layer.classList.remove('is-active');
            main()?.removeAttribute('aria-busy');
            const status = navigationStatus();
            if (status) status.textContent = 'Page loaded';
            navigationStartedAt = 0;
        }, delay);
    };

    const closeMobileMenu = () => {
        const menu = mobileMenu();
        if (menu?.open) menu.close();
    };

    const closeProductsMenu = () => {
        const wrapper = document.querySelector('.site-products-nav');
        const trigger = wrapper?.querySelector('.site-nav-trigger');
        if (!wrapper || !trigger) return;

        wrapper.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
    };

    const syncStickyHeader = () => {
        const header = headerShell();
        if (!header) return;

        header.classList.toggle('is-scrolled', window.scrollY > 18);
    };

    const initialiseStickyHeader = () => {
        const header = headerShell();
        if (!header) return;

        syncStickyHeader();
        if (header.dataset.stickyInitialised === 'true') return;

        header.dataset.stickyInitialised = 'true';
        window.addEventListener('scroll', syncStickyHeader, { passive: true });
    };

    const initialiseProductsMenu = () => {
        const wrapper = document.querySelector('.site-products-nav');
        const trigger = wrapper?.querySelector('.site-nav-trigger');
        if (!wrapper || !trigger || wrapper.dataset.initialised === 'true') return;

        wrapper.dataset.initialised = 'true';
        const setOpen = open => {
            wrapper.classList.toggle('is-open', open);
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
        };

        trigger.addEventListener('click', () => setOpen(!wrapper.classList.contains('is-open')));
        wrapper.querySelectorAll('a').forEach(link => link.addEventListener('click', () => setOpen(false)));
        document.addEventListener('click', event => {
            if (!wrapper.contains(event.target)) setOpen(false);
        });
        document.addEventListener('keydown', event => {
            if (event.key !== 'Escape' || !wrapper.classList.contains('is-open')) return;
            setOpen(false);
            trigger.focus();
        });
    };

    const initialiseMenu = () => {
        const menu = mobileMenu();
        const toggle = menuToggle();
        if (!menu || !toggle || menu.dataset.initialised === 'true') return;

        menu.dataset.initialised = 'true';
        const close = menu.querySelector('.site-menu-close');

        toggle.addEventListener('click', () => {
            menu.showModal();
            toggle.setAttribute('aria-expanded', 'true');
        });

        close?.addEventListener('click', () => menu.close());
        menu.addEventListener('close', () => toggle.setAttribute('aria-expanded', 'false'));
        menu.addEventListener('click', event => {
            const bounds = menu.getBoundingClientRect();
            if (event.target === menu && (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom)) {
                menu.close();
            }
        });

        menu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMobileMenu));
    };

    const syncActiveNavigation = () => {
        const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
        document.querySelectorAll('.site-desktop-nav a, .site-mobile-menu nav a').forEach(link => {
            const linkPath = new URL(link.href, window.location.origin).pathname.replace(/\/$/, '') || '/';
            const productsParent = linkPath === '/products' && currentPath.startsWith('/products/');
            const isCurrent = linkPath === currentPath || productsParent;
            link.classList.toggle('is-current', isCurrent);
            if (isCurrent) link.setAttribute('aria-current', 'page');
            else link.removeAttribute('aria-current');
        });

        const productsActive = currentPath === '/products' || currentPath.startsWith('/products/');
        document.querySelector('.site-nav-trigger')?.classList.toggle('is-current', productsActive);
        document.querySelector('.site-mobile-products')?.querySelector('summary')?.classList.toggle('is-current', productsActive);
    };

    const initialiseReveal = () => {
        document.documentElement.classList.remove('motion-ready');
        document.querySelectorAll('.reveal.pending').forEach(element => element.classList.remove('pending'));

        if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        const observer = new IntersectionObserver(entries => entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.remove('pending');
            observer.unobserve(entry.target);
        }), { threshold: 0.08 });

        document.documentElement.classList.add('motion-ready');
        document.querySelectorAll('.reveal').forEach(element => {
            element.classList.add('pending');
            observer.observe(element);
        });
    };

    const initialisePreviewForms = () => {
        document.querySelectorAll('[data-preview-form]').forEach(form => {
            if (form.dataset.initialised === 'true') return;
            form.dataset.initialised = 'true';

            form.addEventListener('submit', event => {
                event.preventDefault();
                const status = form.querySelector('.form-status');
                const requiredFields = [...form.querySelectorAll('[required]')];
                let firstInvalid = null;

                requiredFields.forEach(field => {
                    const invalid = !field.checkValidity();
                    field.classList.toggle('is-invalid', invalid);
                    field.setAttribute('aria-invalid', invalid ? 'true' : 'false');
                    if (invalid && !firstInvalid) firstInvalid = field;
                });

                if (firstInvalid) {
                    if (status) status.textContent = 'Please complete the required fields before reviewing the enquiry.';
                    firstInvalid.focus();
                    return;
                }

                if (status) status.textContent = 'Your enquiry details look complete. Preview only — nothing has been sent or stored.';
            });

            form.querySelectorAll('input, select, textarea').forEach(field => {
                const clearInvalid = () => {
                    field.classList.remove('is-invalid');
                    field.removeAttribute('aria-invalid');
                };
                field.addEventListener('input', clearInvalid);
                field.addEventListener('change', clearInvalid);
            });
        });
    };

    const afterNavigation = () => {
        const wasNavigating = navigationStartedAt > 0;
        initialiseStickyHeader();
        initialiseMenu();
        initialiseProductsMenu();
        syncActiveNavigation();
        initialiseReveal();
        initialisePreviewForms();
        hideTransition();

        if (wasNavigating) {
            window.requestAnimationFrame(() => main()?.focus({ preventScroll: true }));
        }
    };

    document.addEventListener('livewire:navigate', event => {
        closeMobileMenu();
        closeProductsMenu();
        showTransition(event.detail?.url);
    });

    document.addEventListener('livewire:navigating', closeMobileMenu);
    document.addEventListener('livewire:navigated', afterNavigation);
    document.addEventListener('DOMContentLoaded', afterNavigation, { once: true });
})();

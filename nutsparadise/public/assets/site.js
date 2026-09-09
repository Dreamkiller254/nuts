(() => {
    let navigationStartedAt = 0;
    let hideTimer = null;

    const transition = () => document.querySelector('#np-transition');
    const mobileMenu = () => document.querySelector('#site-mobile-menu');
    const menuToggle = () => document.querySelector('.site-menu-toggle');

    const pageLabel = (url) => {
        const path = url?.pathname || window.location.pathname;
        const labels = {
            '/': 'Loading home',
            '/about': 'Loading about Nuts Paradise',
            '/products': 'Loading products',
            '/products/macadamias': 'Loading macadamias',
            '/products/cashews': 'Loading cashews',
            '/processing': 'Loading processing',
            '/quality-certification': 'Loading quality & certification',
            '/traceability': 'Loading traceability',
            '/buyers': 'Loading buyer information',
            '/export-markets': 'Loading export markets',
            '/contact': 'Loading contact',
        };

        return labels[path] || 'Loading page';
    };

    const showTransition = (url) => {
        const layer = transition();
        if (!layer) return;

        clearTimeout(hideTimer);
        navigationStartedAt = performance.now();
        const label = layer.querySelector('.np-transition-label');
        if (label) label.textContent = pageLabel(url);
        layer.classList.add('is-active');
        layer.setAttribute('aria-hidden', 'false');
    };

    const hideTransition = () => {
        const layer = transition();
        if (!layer) return;

        const elapsed = navigationStartedAt ? performance.now() - navigationStartedAt : 999;
        const delay = Math.max(0, 150 - elapsed);

        hideTimer = window.setTimeout(() => {
            layer.classList.remove('is-active');
            layer.setAttribute('aria-hidden', 'true');
            navigationStartedAt = 0;
        }, delay);
    };

    const closeMobileMenu = () => {
        const menu = mobileMenu();
        if (menu?.open) menu.close();
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

    const afterNavigation = () => {
        initialiseMenu();
        initialiseReveal();
        hideTransition();

        if (navigationStartedAt) {
            const main = document.querySelector('#main');
            window.requestAnimationFrame(() => main?.focus({ preventScroll: true }));
        }
    };

    document.addEventListener('livewire:navigate', event => {
        closeMobileMenu();
        showTransition(event.detail?.url);
    });

    document.addEventListener('livewire:navigating', () => closeMobileMenu());
    document.addEventListener('livewire:navigated', afterNavigation);
    document.addEventListener('DOMContentLoaded', afterNavigation, { once: true });
})();

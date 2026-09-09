(() => {
    const initialise = () => {
        const dialog = document.querySelector('#enquiry');
        if (!dialog || dialog.dataset.initialised === 'true') return;

        dialog.dataset.initialised = 'true';
        const close = dialog.querySelector('.np-close');
        const form = dialog.querySelector('form');
        const status = dialog.querySelector('.form-status');

        close?.addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', event => {
            const bounds = dialog.getBoundingClientRect();
            if (event.target === dialog && (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom)) dialog.close();
        });

        document.querySelectorAll('[data-enquiry]').forEach(link => {
            link.addEventListener('click', event => {
                event.preventDefault();
                status.textContent = '';
                if (link.dataset.product) dialog.querySelector('select').value = link.dataset.product;
                dialog.showModal();
            });
        });

        form?.addEventListener('submit', event => {
            event.preventDefault();
            const details = [...new FormData(event.target)].map(([key, value]) => `${key}: ${value}`).join('\n\n');
            const blob = new Blob([`NUTS PARADISE — BUYER ENQUIRY\n\n${details}\n\nPrepared locally. This enquiry has not been sent.\n`], { type: 'text/plain;charset=utf-8' });
            const url = URL.createObjectURL(blob);
            const download = document.createElement('a');
            download.href = url;
            download.download = 'nuts-paradise-enquiry.txt';
            download.click();
            setTimeout(() => URL.revokeObjectURL(url), 1000);
            status.textContent = 'Your enquiry brief is ready to share. Nothing has been sent.';
        });

        const menuToggle = document.querySelector('.np-menu-toggle');
        if (menuToggle) {
            const menu = document.createElement('dialog');
            menu.className = 'np-mobile-menu';
            menu.id = 'mobile-menu';
            menu.setAttribute('aria-label', 'Navigation');
            menu.innerHTML = '<button class="np-close" type="button" aria-label="Close menu">×</button><small>NUTS PARADISE</small><nav><a href="#about">Our company</a><a href="#products">Our products</a><a href="#processing">Processing</a><a href="#logistics">Global reach</a><a href="#quality">Quality & certification</a><a href="#enquiry" class="mobile-enquiry">Request a Quote ↗</a></nav><small>Mbombela, South Africa · Global supply</small>';
            document.body.append(menu);
            menuToggle.setAttribute('aria-controls', menu.id);
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.addEventListener('click', () => { menu.showModal(); menuToggle.setAttribute('aria-expanded', 'true'); });
            menu.addEventListener('close', () => menuToggle.setAttribute('aria-expanded', 'false'));
            menu.querySelector('.np-close').addEventListener('click', () => menu.close());
            menu.querySelectorAll('a').forEach(link => link.addEventListener('click', event => {
                menu.close();
                if (link.classList.contains('mobile-enquiry')) { event.preventDefault(); dialog.showModal(); }
            }));
        }

        if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const observer = new IntersectionObserver(entries => entries.forEach(entry => {
                if (entry.isIntersecting) { entry.target.classList.remove('pending'); observer.unobserve(entry.target); }
            }), { threshold: 0.08 });
            document.documentElement.classList.add('motion-ready');
            document.querySelectorAll('.reveal').forEach(element => { element.classList.add('pending'); observer.observe(element); });
        }
    };

    document.addEventListener('DOMContentLoaded', initialise);
    document.addEventListener('livewire:navigated', initialise);
})();

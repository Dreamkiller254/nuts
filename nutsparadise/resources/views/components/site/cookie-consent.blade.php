<div class="np-cookie-system" data-cookie-system data-cookie-version="1">
    <section class="np-cookie-banner" data-cookie-banner hidden aria-label="Cookie choices">
        <div class="np-cookie-banner-copy">
            <span class="np-cookie-kicker">Privacy choices</span>
            <h2>Your privacy, your choice.</h2>
            <p>We use essential browser storage for core site functions. Optional external media, including Google Maps, is blocked until you allow it.</p>
            <a href="{{ route('privacy') }}" wire:navigate>Read our Privacy Policy</a>
        </div>
        <div class="np-cookie-banner-actions">
            <button type="button" class="np-cookie-action" data-cookie-accept>Accept optional</button>
            <button type="button" class="np-cookie-action" data-cookie-reject>Reject optional</button>
            <button type="button" class="np-cookie-manage" data-cookie-settings>Manage choices</button>
        </div>
    </section>

    <button class="np-cookie-settings-fab" type="button" data-cookie-settings data-cookie-settings-fab hidden>
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M12 3.5a2.1 2.1 0 0 1 2.02 1.52l.17.6a6.77 6.77 0 0 1 1.6.92l.61-.16a2.1 2.1 0 0 1 2.34.99 2.1 2.1 0 0 1-.31 2.52l-.44.45c.06.31.09.64.09.97 0 .34-.03.66-.09.98l.44.44a2.1 2.1 0 0 1 .31 2.53 2.1 2.1 0 0 1-2.34.98l-.61-.16c-.49.38-1.03.69-1.6.93l-.17.59A2.1 2.1 0 0 1 12 20.5a2.1 2.1 0 0 1-2.02-1.52l-.17-.59a6.77 6.77 0 0 1-1.6-.93l-.61.16a2.1 2.1 0 0 1-2.34-.98 2.1 2.1 0 0 1 .31-2.53l.44-.44a5.2 5.2 0 0 1 0-1.95l-.44-.45a2.1 2.1 0 0 1-.31-2.52A2.1 2.1 0 0 1 7.6 6.38l.61.16c.49-.38 1.03-.69 1.6-.92l.17-.6A2.1 2.1 0 0 1 12 3.5Z" fill="none" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="12" cy="12" r="2.6" fill="none" stroke="currentColor" stroke-width="1.5"/>
        </svg>
        Cookie settings
    </button>

    <dialog class="np-cookie-dialog" data-cookie-dialog aria-labelledby="np-cookie-title">
        <div class="np-cookie-dialog-shell">
            <header>
                <div>
                    <span class="np-cookie-kicker">Privacy controls</span>
                    <h2 id="np-cookie-title">Choose what you allow</h2>
                </div>
                <button type="button" class="np-cookie-dialog-close" data-cookie-dialog-close aria-label="Close cookie settings">×</button>
            </header>

            <p class="np-cookie-dialog-intro">Necessary storage is used only for core functionality and remembering your privacy choice. Optional services stay off unless you choose to allow them.</p>

            <div class="np-cookie-choice-list">
                <div class="np-cookie-choice is-required">
                    <div>
                        <strong>Necessary</strong>
                        <p>Required for core site functionality, security and remembering your privacy preference.</p>
                    </div>
                    <span class="np-cookie-required-badge">Always on</span>
                </div>

                <label class="np-cookie-choice" for="np-external-media-consent">
                    <div>
                        <strong>External media</strong>
                        <p>Allows Google Maps to load on the Contact page. Google may then process technical information under its own privacy practices.</p>
                    </div>
                    <span class="np-cookie-switch">
                        <input id="np-external-media-consent" type="checkbox" data-cookie-external-media>
                        <span aria-hidden="true"></span>
                    </span>
                </label>
            </div>

            <div class="np-cookie-dialog-actions">
                <button type="button" class="np-cookie-action" data-cookie-save>Save choices</button>
                <button type="button" class="np-cookie-action" data-cookie-reject>Reject optional</button>
                <button type="button" class="np-cookie-action" data-cookie-accept>Accept optional</button>
            </div>
            <p class="np-cookie-dialog-footnote">You can reopen these settings from any page and change your choice at any time.</p>
        </div>
    </dialog>
</div>

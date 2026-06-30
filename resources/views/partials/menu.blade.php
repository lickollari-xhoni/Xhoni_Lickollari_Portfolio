<div class="menu-overlay" id="menuOverlay" >
    <div class="menu-content-wrapper d-flex flex-column align-items-center justify-content-center">

        <ul class="menu-page-list list-unstyled m-0">
            <li class="menu-page-item">
                <span class="menu-page-number">01</span>
                <a href="{{ route('home') }}" class="menu-page-link">
                    <span class="first-letter">H</span><span class="rest-text">OME</span>
                </a>
            </li>
            <li class="menu-page-item">
                <span class="menu-page-number">02</span>
                <a href="{{ route('work') }}" class="menu-page-link">
                    <span class="first-letter">W</span><span class="rest-text">ORK</span>
                </a>
            </li>
            <li class="menu-page-item">
                <span class="menu-page-number">03</span>
                <a href="{{ route('about') }}" class="menu-page-link">
                    <span class="first-letter">A</span><span class="rest-text">BOUT</span>
                </a>
            </li>
            <li class="menu-page-item">
                <span class="menu-page-number">04</span>
                <a href="{{ route('contact') }}" class="menu-page-link">
                    <span class="first-letter">C</span><span class="rest-text">ONTACT</span>
                </a>
            </li>
        </ul>

        <div class="menu-social-container d-flex gap-5 border-top border-secondary border-opacity-25 w-100 justify-content-center">
            <a href="https://github.com/lickollari-xhoni" target="_blank"
                class="menu-social-link interactive-link d-flex align-items-center gap-2">
                <span class="arrow">&nearr;</span> GitHub
                <div class="hover-circle"></div>
            </a>

            <a href="https://www.linkedin.com/in/xhoni-lickollari-677936236/" target="_blank"
                class="menu-social-link interactive-link d-flex align-items-center gap-2">
                <span class="arrow">&nearr;</span> LinkedIn
                <div class="hover-circle"></div>
            </a>
        </div>
    </div>

    {{-- Footer modificato: justify-content-start per allineare a sinistra --}}
    <footer class="container d-flex justify-content-start align-items-center text-muted small">
        <div>&copy; 2026 Xhoni Lickollari. {{ __('ui.diritti') }}</div>
    </footer>
</div>
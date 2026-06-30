<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhoni Lickollari | Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column justify-content-between min-vh-100 position-relative">

    <div class="position-absolute gradient-blob-1 rounded-circle opacity-50"
        style="width: 450px; height: 450px; top: -100px; left: -150px; filter: blur(60px); z-index: -1;"></div>
    <div class="position-absolute gradient-blob-2 rounded-circle opacity-40"
        style="width: 400px; height: 400px; bottom: 5%; right: -100px; filter: blur(60px); z-index: -1;"></div>

    <header class="container pt-4 d-flex justify-content-between align-items-center"
        style="position: relative; z-index: 2000;">

        <a href="{{ route('home') }}" class="brand-logo d-flex align-items-center gap-3 text-decoration-none">
            <svg id="xhLogo" class="logo-animated" viewBox="0 0 150 70" width="60" height="40"
                style="cursor: pointer; overflow: visible;">
                <g fill="none" stroke="var(--text-primary)" stroke-width="12" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M10,10 C25,10 40,50 55,50 M55,10 C40,10 25,50 10,50" />
                    <path d="M65,5 L65,60 C65,30 90,20 90,55" />
                </g>
            </svg>
        </a>

        <div class="d-flex align-items-center gap-3">

            <label class="switch-container">
                <input type="checkbox" id="langToggle" {{ app()->getLocale() == 'en' ? 'checked' : '' }}
                    onchange="window.location.href='{{ route('lang.switch', app()->getLocale() == 'it' ? 'en' : 'it') }}'">
                <span class="slider"></span>
            </label>

            <button class="menu-trigger" id="menuBtn" aria-label="Menu">
                <div class="menu-trigger-bg"></div>
                <svg class="menu-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <rect class="cross-rect rect-v" x="43" y="15" width="14" height="70" rx="7" />
                    <rect class="cross-rect rect-h" x="15" y="43" width="70" height="14" rx="7" />
                    <circle class="c-tl" cx="20" cy="20" r="6" />
                    <circle class="c-tc" cx="50" cy="20" r="6" />
                    <circle class="c-tr" cx="80" cy="20" r="6" />
                    <circle class="c-ml" cx="20" cy="50" r="6" />
                    <circle class="c-mc" cx="50" cy="50" r="6" />
                    <circle class="c-mr" cx="80" cy="50" r="6" />
                    <circle class="c-bl" cx="20" cy="80" r="6" />
                    <circle class="c-bc" cx="50" cy="80" r="6" />
                    <circle class="c-br" cx="80" cy="80" r="6" />
                </svg>
            </button>
        </div>
    </header>

    <main class="container my-auto py-5 position-relative flex-grow-1 d-flex align-items-center justify-content-center">
        @yield('content')
    </main>

    <footer class="container d-flex justify-content-between align-items-center text-muted small">
        <div>&copy; 2026 Xhoni Lickollari. {{ __('ui.diritti') }}</div>
    </footer>

    @include('partials.menu')

</body>

</html>

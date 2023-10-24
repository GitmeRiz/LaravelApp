<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="content">
        @yield('content')
    </div>
    <div class="theme-toggle">
        <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider"></span>
        </label>
        <span id="themeLabel"></span>
    </div>

    <script>
        const toggle = document.getElementById('darkModeToggle');
        const body = document.body;
        const themeLabel = document.getElementById('themeLabel');

        function updateLabel() {
            themeLabel.textContent = body.classList.contains('dark-mode') ? '' : '';
        }

        if (localStorage.getItem('theme') === 'dark') {
            toggle.checked = true;
            body.classList.add('dark-mode');
            updateLabel();
        }

        toggle.addEventListener('change', () => {
            if (toggle.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
            }
            updateLabel();
        });
    </script>

    @stack('scripts')
</body>

</html>

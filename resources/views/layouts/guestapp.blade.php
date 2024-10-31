<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        {{--<link rel="stylesheet" href="css/dashboard.css">--}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @vite('resources/css/dashboard.css')
        <script>
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggleButton = document.querySelector('.sidebar-toggle-button');
            sidebarToggleButton.addEventListener('click', () => {
                sidebar.classList.toggle('sidebar-visible');
            });
        </script>
    </head>

    <body>
    {{--
        @yield('auth')
          <x-sidebar />
          <x-dashboard />
    --}}
    <label>
        Material 3
        <md-checkbox checked></md-checkbox>
    </label>

    <md-outlined-button>Back</md-outlined-button>
    <md-filled-button>Next</md-filled-button>
    <md-slider></md-slider>
    <md-slider ticks value="50"></md-slider>
    <md-slider range value-start="25" value-end="75"></md-slider>

    </body>
</html>



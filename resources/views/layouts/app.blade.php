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
       {{-- script added by mili to make the sidebar responsive --}}
        <script>
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggleButton = document.querySelector('.sidebar-toggle-button');
            sidebarToggleButton.addEventListener('click', () => {
                sidebar.classList.toggle('sidebar-visible');
            });
        </script>
    </head>

    <body>
     <header>
         <x-navbar />
     </header>
     <div class="content-wrapper">
        @yield('auth')
     </div>
     {{--
           <x-sidebar />
           <x-dashboard />
     --}}

    </body>
</html>

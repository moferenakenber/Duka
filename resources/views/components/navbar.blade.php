<!-- First navbar bootstrap -->
<!-- First navbar bootstrap
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="/dashboard" class="navbar-brand">YS</a>

        <button class="button navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- aria-current="page" is not working for some reason, it was supposed to highlight the page the user was on. --}}
                    <a href="/dashboard" class="nav-link" aria-current="{{ request()->is('dashboard') ? 'page' : 'false' }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/customers" class="nav-link">Customers</a>
                </li>
                <li class="nav-item">
                    <a href="/items" class="nav-link">Items</a>
                </li>
                <li class="nav-item">
                    <a href="/stock" class="nav-link">Stock</a>
                </li>
                <li class="nav-item">
                    <a href="/carts" class="nav-link">Carts</a>
                </li>
                <li class="nav-item">
                    <a href="/sales" class="nav-link">Sales</a>
                </li>
                <li class="nav-item">
                    <a href="/purchases" class="nav-link">Purchases</a>
                </li>
                <li class="nav-item">
                    <a href="/projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="/tasks" class="nav-link">Tasks</a>
                </li>
                <li class="nav-item">
                    <a href="/calendar" class="nav-link">Calendar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
               -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a href="/dashboard" class="navbar-brand">YS</a>

        <!-- Offcanvas Toggle Button in Navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDuka" aria-controls="offcanvasDuka">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <!--
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/customers" class="nav-link">Customers</a>
                </li>

            </ul>
            -->
        </div>
    </div>
</nav>

<!-- Off-Canvas Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDuka" aria-labelledby="offcanvasDukaLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDukaLabel">Sidebar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <li><a href="/dashboard" class="text-dark">Dashboard</a></li>
            <li><a href="/userprofile" class="text-dark">User Profile</a></li>
            <li><a href="/usermanagement" class="text-dark">User Management</a></li>
            <li><a href="/customers" class="text-dark">Customers</a></li>
            <li><a href="/items" class="text-dark">Items</a></li>
            <li><a href="/stock" class="text-dark">Stock</a></li>
            <li><a href="/carts" class="text-dark">Carts</a></li>
            <li><a href="/sales" class="text-dark">Sales</a></li>
            <li><a href="/purchases" class="text-dark">Purchases</a></li>
            <li><a href="/projects" class="text-dark">Projects</a></li>
            <li><a href="/tasks" class="text-dark">Tasks</a></li>
            <li><a href="/calendar" class="text-dark">Calendar</a></li>
        </ul>
    </div>
</div>



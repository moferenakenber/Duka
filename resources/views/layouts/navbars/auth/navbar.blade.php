<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a href="/dashboard" class="navbar-brand">YS</a>

        <!-- Offcanvas Toggle Button in Navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDuka" aria-controls="offcanvasDuka">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <h4 class="text-white">Welcome, {{ auth()->user()->username }}</h4>
                </li>
            </ul>

            <h4>Welcome, {{ auth()->user()->username }}!</h4>
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
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDuka" aria-labelledby="offcanvasDukaLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDukaLabel">Sidebar</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <hr>
            <li><a href="/dashboard" class="text-white">Dashboard</a></li>
            <hr>
            <li><a href="/userprofile" class="text-white">User Profile</a></li>
            <li><a href="/usermanagment" class="text-white">User Management</a></li>
            <hr>
            <li><a href="/customers" class="text-white">Customers</a></li>
            <li><a href="/items" class="text-white">Items</a></li>
            <li><a href="/stock" class="text-white">Stock</a></li>
            <li><a href="/carts" class="text-white">Carts</a></li>
            <li><a href="/sales" class="text-white">Sales</a></li>
            <li><a href="/purchases" class="text-white">Purchases</a></li>
            <li><a href="/projects" class="text-white">Projects</a></li>
            <li><a href="/tasks" class="text-white">Tasks</a></li>
            <li><a href="/calendar" class="text-white">Calendar</a></li>
        </ul>
    </div>
</div>



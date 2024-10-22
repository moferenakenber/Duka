<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/mycss.css') <!-- Optional custom CSS -->
    <title>Bootstrap Sidebar Example</title>
</head>
<body>

<!-- Sidebar -->
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-end" id="sidebar-wrapper">
        <div class="sidebar-heading">Menu</div>
        <div class="list-group list-group-flush">
            <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="/customers" class="list-group-item list-group-item-action bg-light">Customers</a>
            <a href="/items" class="list-group-item list-group-item-action bg-light">Items</a>
            <a href="/stock" class="list-group-item list-group-item-action bg-light">Stock</a>
            <a href="/carts" class="list-group-item list-group-item-action bg-light">Carts</a>
            <a href="/sales" class="list-group-item list-group-item-action bg-light">Sales</a>
            <a href="/purchases" class="list-group-item list-group-item-action bg-light">Purchases</a>
            <a href="/projects" class="list-group-item list-group-item-action bg-light">Projects</a>
            <a href="/tasks" class="list-group-item list-group-item-action bg-light">Tasks</a>
            <a href="/calendar" class="list-group-item list-group-item-action bg-light">Calendar</a>
            <a href="/logout" class="list-group-item list-group-item-action bg-light">Logout</a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <p>Your content goes here...</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle the sidebar
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>

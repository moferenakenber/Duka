<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
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
                            <a href="/dashboard" class="nav-link" aria-current="page">Dashboard</a>
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
                            <a href="/tasks" class="nav-link">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a href="/calendar" class="nav-link">Calendar</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="http://duka.local:8081/build/assets/app-BNc9Tzrd.css" />
    <link rel="stylesheet" href="http://duka.local:8081/build/assets/dashboard-CELCklex.css" />
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .content-wrapper {
            display: flex;
            height: 100vh; /* Full height of the viewport */
        }

        .sidebar {
            width: 250px; /* Adjust the width of the sidebar as needed */
            background-color: #343a40; /* Sidebar background color */
            color: white;
            overflow-y: auto; /* Enable vertical scrolling */
            position: fixed; /* Fix the sidebar to the left */
            height: 100%; /* Full height of the page */
        }

        .main--content {
            margin-left: 250px; /* Same width as the sidebar */
            padding: 20px; /* Add some padding for the content */
            overflow-y: auto; /* Enable vertical scrolling */
            height: 100vh; /* Full height of the viewport */
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggleButton = document.querySelector('.sidebar-toggle-button');
            if (sidebarToggleButton) {
                sidebarToggleButton.addEventListener('click', () => {
                    sidebar.classList.toggle('sidebar-visible');
                });
            }
        });
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/dashboard" class="navbar-brand">YS</a>
            <button class="button navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link" aria-current="false">Dashboard</a>
                    </li>
                    <li class="nav-item"><a href="/customers" class="nav-link">Customers</a></li>
                    <li class="nav-item"><a href="/items" class="nav-link">Items</a></li>
                    <li class="nav-item"><a href="/stock" class="nav-link">Stock</a></li>
                    <li class="nav-item"><a href="/carts" class="nav-link">Carts</a></li>
                    <li class="nav-item"><a href="/sales" class="nav-link">Sales</a></li>
                    <li class="nav-item"><a href="/purchases" class="nav-link">Purchases</a></li>
                    <li class="nav-item"><a href="/projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="/tasks" class="nav-link">Tasks</a></li>
                    <li class="nav-item"><a href="/calendar" class="nav-link">Calendar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="content-wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="menu">
            <li><a href="/dashboard"><i class='bx bxs-dashboard'></i><span>Dashboard</span></a></li>
            <li><a href="http://duka.local:8081/userprofile"><i class='bx bxs-user-circle'></i><span>User Profile</span></a></li>
            <li><a href="/usermanagment"><i class='bx bxs-user-detail'></i><span>User Management</span></a></li>
            <li><a href="/customers"><i class='bx bxs-user-account'></i><span>Customers</span></a></li>
            <li><a href="/items"><i class='bx bxs-dashboard'></i><span>Items</span></a></li>
            <li><a href="/stock"><i class='bx bxs-dashboard'></i><span>Stock</span></a></li>
            <li><a href="/carts"><i class='bx bx-cart'></i><span>Carts</span></a></li>
            <li><a href="/sales"><i class='bx bxs-objects-vertical-bottom'></i><span>Sales</span></a></li>
            <li><a href="/purchases"><i class='bx bxs-objects-vertical-bottom'></i><span>Purchases</span></a></li>
            <li><a href="/projects"><i class='bx bx-task'></i><span>Projects</span></a></li>
            <li><a href="/tasks"><i class='bx bx-task'></i><span>Tasks</span></a></li>
            <li><a href="/calendar"><i class='bx bxs-dashboard'></i><span>Calendar</span></a></li>
            <li><a href="/logout" class="logout"><i class='bx bx-log-out'></i><span>Logout</span></a></li>
        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Tasks</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add Task
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>
                    <form>
                        <div class="mb-3">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter task name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Task Description</label>
                            <textarea rows="5" cols="30" class="form-control" id="description" name="description" placeholder="Enter task description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

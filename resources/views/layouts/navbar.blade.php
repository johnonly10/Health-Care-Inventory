<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #212529;
            color: #fff;
            transition: all 0.3s;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #adb5bd;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            color: #fff;
            background-color: #0d6efd;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        /* Responsive sidebar */
        @media (max-width: 768px) {
            .sidebar {
                left: -250px;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="text-center mb-4">AdminPanel</h4>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Reservations</a>
        <a href="#">Facilities</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom mb-4">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary d-md-none" id="menu-btn">☰</button>
                <form class="d-flex ms-auto me-3">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <img src="https://i.pravatar.cc/40" class="rounded-circle me-2" alt="user">
                        <strong>Admin</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <h3 class="fw-bold mb-3">Dashboard Overview</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <h6>Total Users</h6>
                    <p class="display-6 fw-bold text-primary">1,245</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h6>Total Reservations</h6>
                    <p class="display-6 fw-bold text-success">320</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h6>Revenue</h6>
                    <p class="display-6 fw-bold text-warning">₱45,800</p>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card mt-5 p-4">
            <h5 class="fw-bold mb-3">Recent Reservations</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Facility</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Pavilion</td>
                        <td>John Doe</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>Nov 8, 2025</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Cottage</td>
                        <td>Jane Smith</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>Nov 9, 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribution - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/table.css">
    <link rel="stylesheet" href="/assets/css/components/button.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar Component -->
        <?php include __DIR__ . '/../components/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Header Component -->
            <?php include __DIR__ . '/../components/header.php'; ?>

            <!-- Distribution Content -->
            <div class="dashboard-content">
                <div class="section">
                    <div class="section__header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h1 class="section__title">Distribution Management</h1>
                                <p class="section__subtitle">Track and manage food distribution to NGOs</p>
                            </div>
                            <button class="btn btn--primary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                New Distribution
                            </button>
                        </div>
                    </div>

                    <!-- Filter Section -->
                    <div class="filter-bar">
                        <div class="filter-group">
                            <select class="filter-select">
                                <option>All Status</option>
                                <option>Pending</option>
                                <option>In Transit</option>
                                <option>Delivered</option>
                            </select>
                            <select class="filter-select">
                                <option>All NGOs</option>
                                <option>NGO 1</option>
                                <option>NGO 2</option>
                            </select>
                            <input type="date" class="filter-date">
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-card">
                        <table class="table">
                            <thead class="table__head">
                                <tr>
                                    <th class="table__th">Distribution ID</th>
                                    <th class="table__th">NGO Name</th>
                                    <th class="table__th">Food Items</th>
                                    <th class="table__th">Quantity</th>
                                    <th class="table__th">Status</th>
                                    <th class="table__th">Date</th>
                                    <th class="table__th">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table__body">
                                <tr class="table__row">
                                    <td class="table__td">#DIST-001</td>
                                    <td class="table__td">Hope Foundation</td>
                                    <td class="table__td">Rice, Vegetables</td>
                                    <td class="table__td">50 kg</td>
                                    <td class="table__td">
                                        <span class="badge badge--success">Delivered</span>
                                    </td>
                                    <td class="table__td">Jan 7, 2026</td>
                                    <td class="table__td">
                                        <button class="btn-icon" title="View">
                                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                                <path d="M10 3C5 3 1.73 6.11 1 10c.73 3.89 4 7 9 7s8.27-3.11 9-7c-.73-3.89-4-7-9-7zm0 12a5 5 0 110-10 5 5 0 010 10zm0-8a3 3 0 100 6 3 3 0 000-6z" fill="currentColor"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- More rows would go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/admin-dashboard.js"></script>
</body>
</html>

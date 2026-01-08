<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/stats-card.css">
    <link rel="stylesheet" href="/assets/css/components/chart.css">
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

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <!-- Stats Cards Grid -->
                <div class="stats-grid">
                    <!-- Total Donations Card -->
                    <div class="stats-card">
                        <div class="stats-card__content">
                            <div class="stats-card__info">
                                <h3 class="stats-card__title">Total Donations</h3>
                                <p class="stats-card__value">1,221</p>
                                <span class="stats-card__change stats-card__change--positive">
                                    +12% from last month
                                </span>
                            </div>
                            <div class="stats-card__icon stats-card__icon--donations">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Meals Served Card -->
                    <div class="stats-card">
                        <div class="stats-card__content">
                            <div class="stats-card__info">
                                <h3 class="stats-card__title">Meals Served</h3>
                                <p class="stats-card__value">24,410</p>
                                <span class="stats-card__change stats-card__change--positive">
                                    +18% from last month
                                </span>
                            </div>
                            <div class="stats-card__icon stats-card__icon--meals">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13M16 3.13C16.8604 3.3503 17.623 3.8507 18.1676 4.55231C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89317 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Active NGOs Card -->
                    <div class="stats-card">
                        <div class="stats-card__content">
                            <div class="stats-card__info">
                                <h3 class="stats-card__title">Active NGOs</h3>
                                <p class="stats-card__value">87</p>
                                <span class="stats-card__change stats-card__change--positive">
                                    +5 new this month
                                </span>
                            </div>
                            <div class="stats-card__icon stats-card__icon--ngos">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Food Saved Card -->
                    <div class="stats-card">
                        <div class="stats-card__content">
                            <div class="stats-card__info">
                                <h3 class="stats-card__title">Food Saved</h3>
                                <p class="stats-card__value">8.5 tons</p>
                                <span class="stats-card__change stats-card__change--neutral">
                                    This month
                                </span>
                            </div>
                            <div class="stats-card__icon stats-card__icon--food">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="charts-grid">
                    <!-- Bar Chart Card -->
                    <div class="chart-card chart-card--bar">
                        <div class="chart-card__header">
                            <h3 class="chart-card__title">Donations & Meals Overview</h3>
                        </div>
                        <div class="chart-card__body">
                            <div class="bar-chart" id="donationsMealsChart">
                                <div class="bar-chart__container">
                                    <div class="bar-chart__y-axis">
                                        <span class="bar-chart__y-label">600</span>
                                        <span class="bar-chart__y-label">450</span>
                                        <span class="bar-chart__y-label">300</span>
                                        <span class="bar-chart__y-label">150</span>
                                        <span class="bar-chart__y-label">0</span>
                                    </div>
                                    <div class="bar-chart__content">
                                        <!-- March -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 50%;" data-value="300"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">March</span>
                                        </div>
                                        <!-- April -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 55%;" data-value="330"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">April</span>
                                        </div>
                                        <!-- May -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 60%;" data-value="360"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">May</span>
                                        </div>
                                        <!-- June -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 75%;" data-value="450"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">June</span>
                                        </div>
                                        <!-- September -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 85%;" data-value="510"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">Sept</span>
                                        </div>
                                        <!-- November -->
                                        <div class="bar-chart__group">
                                            <div class="bar-chart__bars">
                                                <div class="bar-chart__bar bar-chart__bar--donations" style="height: 100%;" data-value="600"></div>
                                                <div class="bar-chart__bar bar-chart__bar--meals" style="height: 5%;" data-value="30"></div>
                                            </div>
                                            <span class="bar-chart__x-label">Nov</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bar-chart__legend">
                                    <div class="bar-chart__legend-item">
                                        <span class="bar-chart__legend-color bar-chart__legend-color--donations"></span>
                                        <span class="bar-chart__legend-label">Donations</span>
                                    </div>
                                    <div class="bar-chart__legend-item">
                                        <span class="bar-chart__legend-color bar-chart__legend-color--meals"></span>
                                        <span class="bar-chart__legend-label">Meals Served</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart Card -->
                    <div class="chart-card chart-card--pie">
                        <div class="chart-card__header">
                            <h3 class="chart-card__title">Food Impact Analysis</h3>
                        </div>
                        <div class="chart-card__body">
                            <div class="pie-chart" id="foodImpactChart">
                                <div class="pie-chart__container">
                                    <svg class="pie-chart__svg" viewBox="0 0 200 200">
                                        <!-- Food Saved: 8500kg (47.2%) -->
                                        <circle class="pie-chart__segment pie-chart__segment--saved" 
                                                cx="100" cy="100" r="80" 
                                                stroke-dasharray="236 500" 
                                                stroke-dashoffset="0"
                                                transform="rotate(-90 100 100)"/>
                                        <!-- Waste Prevented: 6200kg (34.4%) -->
                                        <circle class="pie-chart__segment pie-chart__segment--prevented" 
                                                cx="100" cy="100" r="80" 
                                                stroke-dasharray="172 500" 
                                                stroke-dashoffset="-236"
                                                transform="rotate(-90 100 100)"/>
                                        <!-- Still Wasted: 1200kg (6.7%) -->
                                        <circle class="pie-chart__segment pie-chart__segment--wasted" 
                                                cx="100" cy="100" r="80" 
                                                stroke-dasharray="92 500" 
                                                stroke-dashoffset="-408"
                                                transform="rotate(-90 100 100)"/>
                                    </svg>
                                    <div class="pie-chart__center">
                                        <span class="pie-chart__title">Total Impact</span>
                                        <span class="pie-chart__total">15,900 kg</span>
                                    </div>
                                </div>
                                <div class="pie-chart__legend">
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color pie-chart__legend-color--saved"></span>
                                        <div class="pie-chart__legend-info">
                                            <span class="pie-chart__legend-label">Food Saved</span>
                                            <span class="pie-chart__legend-value">8500 kg</span>
                                        </div>
                                    </div>
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color pie-chart__legend-color--prevented"></span>
                                        <div class="pie-chart__legend-info">
                                            <span class="pie-chart__legend-label">Waste Prevented</span>
                                            <span class="pie-chart__legend-value">6200 kg</span>
                                        </div>
                                    </div>
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color pie-chart__legend-color--wasted"></span>
                                        <div class="pie-chart__legend-info">
                                            <span class="pie-chart__legend-label">Still Wasted</span>
                                            <span class="pie-chart__legend-value">1200 kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/admin-dashboard.js"></script>
</body>
</html>

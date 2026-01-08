<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Reports - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/card.css">
    <link rel="stylesheet" href="/assets/css/components/button.css">
    <link rel="stylesheet" href="/assets/css/components/form.css">
    <link rel="stylesheet" href="/assets/css/components/chart.css">
    <link rel="stylesheet" href="/assets/css/components/table.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
    <style>
        .report-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
            flex-wrap: wrap;
        }
        .report-filters {
            display: flex;
            gap: var(--spacing-md);
            flex-wrap: wrap;
        }
        .filter-group {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-xs);
        }
        .filter-group label {
            font-size: var(--font-size-xs);
            color: var(--color-gray-600);
            font-weight: var(--font-weight-medium);
        }
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
        }
        .metric-card {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
            border-radius: var(--radius-xl);
            padding: var(--spacing-xl);
            color: var(--color-white);
            box-shadow: var(--shadow-md);
        }
        .metric-card__header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: var(--spacing-lg);
        }
        .metric-card__icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .metric-card__value {
            font-size: 36px;
            font-weight: var(--font-weight-bold);
            line-height: 1;
            margin-bottom: var(--spacing-sm);
        }
        .metric-card__label {
            font-size: var(--font-size-sm);
            opacity: 0.9;
        }
        .metric-card__trend {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-xs);
            font-size: var(--font-size-xs);
            background: rgba(255, 255, 255, 0.15);
            padding: var(--spacing-xs) var(--spacing-sm);
            border-radius: var(--radius-md);
            margin-top: var(--spacing-sm);
        }
        .chart-row {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
        }
        @media (max-width: 1024px) {
            .chart-row {
                grid-template-columns: 1fr;
            }
        }
        .export-section {
            display: flex;
            gap: var(--spacing-md);
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar Component -->
        <?php include __DIR__ . '/../components/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Header Component -->
            <?php include __DIR__ . '/../components/header.php'; ?>

            <!-- Reports Content -->
            <div class="dashboard-content">
                <div class="section">
                    <!-- Report Header with Filters and Export -->
                    <div class="report-header">
                        <div>
                            <h1 class="section__title">Donation Reports</h1>
                            <p class="section__subtitle">Comprehensive analysis of donation activities and impact</p>
                        </div>
                        <div class="export-section">
                            <button class="btn btn--outline">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M14 3V7C14 7.55228 14.4477 8 15 8H19" stroke="currentColor" stroke-width="2"/>
                                    <path d="M17 21H3C1.89543 21 1 20.1046 1 19V5C1 3.89543 1.89543 3 3 3H14L19 8V19C19 20.1046 18.1046 21 17 21Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Export PDF
                            </button>
                            <button class="btn btn--primary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M3 3H11V7H15V17H3V3Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M11 3L15 7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M7 11H11M7 13H11M7 9H11" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Export Excel
                            </button>
                        </div>
                    </div>

                    <!-- Date Range Filters -->
                    <div class="card" style="padding: var(--spacing-xl); margin-bottom: var(--spacing-2xl);">
                        <div class="report-filters">
                            <div class="filter-group">
                                <label>Date Range</label>
                                <select class="form-select">
                                    <option>Last 7 Days</option>
                                    <option>Last 30 Days</option>
                                    <option selected>Last 3 Months</option>
                                    <option>Last 6 Months</option>
                                    <option>Last Year</option>
                                    <option>Custom Range</option>
                                </select>
                            </div>
                            <div class="filter-group">
                                <label>Donation Type</label>
                                <select class="form-select">
                                    <option selected>All Types</option>
                                    <option>Perishable</option>
                                    <option>Non-Perishable</option>
                                    <option>Cooked Meals</option>
                                    <option>Fresh Produce</option>
                                </select>
                            </div>
                            <div class="filter-group">
                                <label>Donor Type</label>
                                <select class="form-select">
                                    <option selected>All Donors</option>
                                    <option>Restaurants</option>
                                    <option>Hotels</option>
                                    <option>Individuals</option>
                                    <option>Supermarkets</option>
                                </select>
                            </div>
                            <div class="filter-group">
                                <label>Distribution Center</label>
                                <select class="form-select">
                                    <option selected>All Centers</option>
                                    <option>Downtown Center</option>
                                    <option>North District Hub</option>
                                    <option>South Community Center</option>
                                </select>
                            </div>
                            <div class="filter-group" style="justify-content: flex-end;">
                                <label style="opacity: 0;">Action</label>
                                <button class="btn btn--primary">Apply Filters</button>
                            </div>
                        </div>
                    </div>

                    <!-- Key Metrics -->
                    <div class="metrics-grid">
                        <div class="metric-card">
                            <div class="metric-card__header">
                                <div class="metric-card__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2"/>
                                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="metric-card__value">1,248</div>
                            <div class="metric-card__label">Total Donations</div>
                            <div class="metric-card__trend">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 4L3 11L5 13L10 8L15 13L17 11L10 4Z"/>
                                </svg>
                                +18% from last period
                            </div>
                        </div>

                        <div class="metric-card" style="background: linear-gradient(135deg, #D97706 0%, #F59E0B 100%);">
                            <div class="metric-card__header">
                                <div class="metric-card__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="metric-card__value">3.8 tons</div>
                            <div class="metric-card__label">Food Distributed</div>
                            <div class="metric-card__trend">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 4L3 11L5 13L10 8L15 13L17 11L10 4Z"/>
                                </svg>
                                +24% from last period
                            </div>
                        </div>

                        <div class="metric-card" style="background: linear-gradient(135deg, #0891B2 0%, #06B6D4 100%);">
                            <div class="metric-card__header">
                                <div class="metric-card__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2"/>
                                        <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="metric-card__value">9,580</div>
                            <div class="metric-card__label">People Served</div>
                            <div class="metric-card__trend">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 4L3 11L5 13L10 8L15 13L17 11L10 4Z"/>
                                </svg>
                                +15% from last period
                            </div>
                        </div>

                        <div class="metric-card" style="background: linear-gradient(135deg, #7C3AED 0%, #A78BFA 100%);">
                            <div class="metric-card__header">
                                <div class="metric-card__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M16 8C16 10.2091 14.2091 12 12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8Z" stroke="currentColor" stroke-width="2"/>
                                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="metric-card__value">342</div>
                            <div class="metric-card__label">Active Donors</div>
                            <div class="metric-card__trend">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 4L3 11L5 13L10 8L15 13L17 11L10 4Z"/>
                                </svg>
                                +12% from last period
                            </div>
                        </div>
                    </div>

                    <!-- Charts Section -->
                    <div class="chart-row">
                        <!-- Monthly Trend Chart -->
                        <div class="card">
                            <div class="card__header">
                                <h3 class="card__title">Monthly Donation Trends</h3>
                            </div>
                            <div class="card__body">
                                <div class="bar-chart">
                                    <div class="bar-chart__bars">
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 65%;"></div>
                                            <span class="bar-chart__label">Jan</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 72%;"></div>
                                            <span class="bar-chart__label">Feb</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 80%;"></div>
                                            <span class="bar-chart__label">Mar</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 68%;"></div>
                                            <span class="bar-chart__label">Apr</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 85%;"></div>
                                            <span class="bar-chart__label">May</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 90%;"></div>
                                            <span class="bar-chart__label">Jun</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 95%;"></div>
                                            <span class="bar-chart__label">Jul</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 88%;"></div>
                                            <span class="bar-chart__label">Aug</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 92%;"></div>
                                            <span class="bar-chart__label">Sep</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 78%;"></div>
                                            <span class="bar-chart__label">Oct</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 83%;"></div>
                                            <span class="bar-chart__label">Nov</span>
                                        </div>
                                        <div class="bar-chart__bar-group">
                                            <div class="bar-chart__bar bar-chart__bar--primary" style="height: 100%;"></div>
                                            <span class="bar-chart__label">Dec</span>
                                        </div>
                                    </div>
                                    <div class="bar-chart__legend">
                                        <div class="bar-chart__legend-item">
                                            <span class="bar-chart__legend-color" style="background: var(--color-primary);"></span>
                                            <span class="bar-chart__legend-label">Donations (tons)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donor Type Distribution -->
                        <div class="card">
                            <div class="card__header">
                                <h3 class="card__title">Donor Type Distribution</h3>
                            </div>
                            <div class="card__body">
                                <div class="pie-chart">
                                    <svg viewBox="0 0 200 200" class="pie-chart__svg">
                                        <!-- Restaurants - 35% -->
                                        <circle cx="100" cy="100" r="80" fill="none" stroke="var(--color-primary)" stroke-width="40" stroke-dasharray="175 350" transform="rotate(-90 100 100)"/>
                                        <!-- Hotels - 25% -->
                                        <circle cx="100" cy="100" r="80" fill="none" stroke="var(--color-secondary)" stroke-width="40" stroke-dasharray="125 350" stroke-dashoffset="-175" transform="rotate(-90 100 100)"/>
                                        <!-- Supermarkets - 20% -->
                                        <circle cx="100" cy="100" r="80" fill="none" stroke="var(--color-warning)" stroke-width="40" stroke-dasharray="100 350" stroke-dashoffset="-300" transform="rotate(-90 100 100)"/>
                                        <!-- Individuals - 20% -->
                                        <circle cx="100" cy="100" r="80" fill="none" stroke="var(--color-info)" stroke-width="40" stroke-dasharray="100 350" stroke-dashoffset="-400" transform="rotate(-90 100 100)"/>
                                    </svg>
                                </div>
                                <div class="pie-chart__legend">
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color" style="background: var(--color-primary);"></span>
                                        <span class="pie-chart__legend-label">Restaurants</span>
                                        <span class="pie-chart__legend-value">35%</span>
                                    </div>
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color" style="background: var(--color-secondary);"></span>
                                        <span class="pie-chart__legend-label">Hotels</span>
                                        <span class="pie-chart__legend-value">25%</span>
                                    </div>
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color" style="background: var(--color-warning);"></span>
                                        <span class="pie-chart__legend-label">Supermarkets</span>
                                        <span class="pie-chart__legend-value">20%</span>
                                    </div>
                                    <div class="pie-chart__legend-item">
                                        <span class="pie-chart__legend-color" style="background: var(--color-info);"></span>
                                        <span class="pie-chart__legend-label">Individuals</span>
                                        <span class="pie-chart__legend-value">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top Donors Table -->
                    <div class="card">
                        <div class="card__header">
                            <h3 class="card__title">Top Donors - Last 3 Months</h3>
                        </div>
                        <div class="card__body">
                            <div class="table-container">
                                <table class="table">
                                    <thead class="table__head">
                                        <tr class="table__row">
                                            <th class="table__header">Rank</th>
                                            <th class="table__header">Donor Name</th>
                                            <th class="table__header">Type</th>
                                            <th class="table__header">Total Donations</th>
                                            <th class="table__header">Amount (kg)</th>
                                            <th class="table__header">People Served</th>
                                            <th class="table__header">Impact Score</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr class="table__row">
                                            <td class="table__cell">
                                                <span class="badge badge--warning" style="font-weight: 700;">🥇 #1</span>
                                            </td>
                                            <td class="table__cell">
                                                <strong>Grand Hotel & Resorts</strong>
                                            </td>
                                            <td class="table__cell">
                                                <span class="badge badge--info">Hotel</span>
                                            </td>
                                            <td class="table__cell">142</td>
                                            <td class="table__cell">485 kg</td>
                                            <td class="table__cell">1,215</td>
                                            <td class="table__cell">
                                                <div style="display: flex; align-items: center; gap: 8px;">
                                                    <div style="width: 80px; height: 8px; background: var(--color-gray-200); border-radius: 4px; overflow: hidden;">
                                                        <div style="width: 95%; height: 100%; background: var(--color-success);"></div>
                                                    </div>
                                                    <span style="font-weight: 600;">95</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table__row">
                                            <td class="table__cell">
                                                <span class="badge badge--info" style="font-weight: 700;">🥈 #2</span>
                                            </td>
                                            <td class="table__cell">
                                                <strong>Spice Garden Restaurant</strong>
                                            </td>
                                            <td class="table__cell">
                                                <span class="badge badge--primary">Restaurant</span>
                                            </td>
                                            <td class="table__cell">128</td>
                                            <td class="table__cell">412 kg</td>
                                            <td class="table__cell">1,030</td>
                                            <td class="table__cell">
                                                <div style="display: flex; align-items: center; gap: 8px;">
                                                    <div style="width: 80px; height: 8px; background: var(--color-gray-200); border-radius: 4px; overflow: hidden;">
                                                        <div style="width: 88%; height: 100%; background: var(--color-success);"></div>
                                                    </div>
                                                    <span style="font-weight: 600;">88</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table__row">
                                            <td class="table__cell">
                                                <span class="badge badge--secondary" style="font-weight: 700;">🥉 #3</span>
                                            </td>
                                            <td class="table__cell">
                                                <strong>Fresh Mart Supermarket</strong>
                                            </td>
                                            <td class="table__cell">
                                                <span class="badge badge--warning">Supermarket</span>
                                            </td>
                                            <td class="table__cell">96</td>
                                            <td class="table__cell">358 kg</td>
                                            <td class="table__cell">895</td>
                                            <td class="table__cell">
                                                <div style="display: flex; align-items: center; gap: 8px;">
                                                    <div style="width: 80px; height: 8px; background: var(--color-gray-200); border-radius: 4px; overflow: hidden;">
                                                        <div style="width: 82%; height: 100%; background: var(--color-success);"></div>
                                                    </div>
                                                    <span style="font-weight: 600;">82</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table__row">
                                            <td class="table__cell">#4</td>
                                            <td class="table__cell">
                                                <strong>City Cafe & Bakery</strong>
                                            </td>
                                            <td class="table__cell">
                                                <span class="badge badge--primary">Restaurant</span>
                                            </td>
                                            <td class="table__cell">84</td>
                                            <td class="table__cell">298 kg</td>
                                            <td class="table__cell">745</td>
                                            <td class="table__cell">
                                                <div style="display: flex; align-items: center; gap: 8px;">
                                                    <div style="width: 80px; height: 8px; background: var(--color-gray-200); border-radius: 4px; overflow: hidden;">
                                                        <div style="width: 75%; height: 100%; background: var(--color-success);"></div>
                                                    </div>
                                                    <span style="font-weight: 600;">75</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table__row">
                                            <td class="table__cell">#5</td>
                                            <td class="table__cell">
                                                <strong>Paradise Inn</strong>
                                            </td>
                                            <td class="table__cell">
                                                <span class="badge badge--info">Hotel</span>
                                            </td>
                                            <td class="table__cell">72</td>
                                            <td class="table__cell">265 kg</td>
                                            <td class="table__cell">662</td>
                                            <td class="table__cell">
                                                <div style="display: flex; align-items: center; gap: 8px;">
                                                    <div style="width: 80px; height: 8px; background: var(--color-gray-200); border-radius: 4px; overflow: hidden;">
                                                        <div style="width: 70%; height: 100%; background: var(--color-success);"></div>
                                                    </div>
                                                    <span style="font-weight: 600;">70</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Reduction Tracking - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/card.css">
    <link rel="stylesheet" href="/assets/css/components/button.css">
    <link rel="stylesheet" href="/assets/css/components/stats-card.css">
    <link rel="stylesheet" href="/assets/css/components/chart.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
    <style>
        .impact-hero {
            background: linear-gradient(135deg, var(--color-success) 0%, var(--color-primary) 100%);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-3xl);
            color: var(--color-white);
            margin-bottom: var(--spacing-2xl);
            box-shadow: var(--shadow-xl);
        }
        .impact-hero__title {
            font-size: 42px;
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--spacing-md);
        }
        .impact-hero__subtitle {
            font-size: var(--font-size-lg);
            opacity: 0.95;
            max-width: 600px;
        }
        .impact-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--spacing-2xl);
            margin-top: var(--spacing-2xl);
        }
        .impact-stat {
            text-align: center;
        }
        .impact-stat__value {
            font-size: 56px;
            font-weight: var(--font-weight-bold);
            line-height: 1;
            margin-bottom: var(--spacing-sm);
        }
        .impact-stat__label {
            font-size: var(--font-size-base);
            opacity: 0.9;
        }
        .impact-stat__description {
            font-size: var(--font-size-sm);
            opacity: 0.8;
            margin-top: var(--spacing-xs);
        }
        .timeline {
            position: relative;
            padding: var(--spacing-xl) 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--color-gray-300);
            transform: translateX(-50%);
        }
        .timeline-item {
            display: flex;
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
            position: relative;
        }
        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }
        .timeline-item__content {
            flex: 1;
            background: var(--color-white);
            border-radius: var(--radius-xl);
            padding: var(--spacing-xl);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--color-gray-200);
        }
        .timeline-item:nth-child(odd) .timeline-item__content {
            text-align: right;
        }
        .timeline-item__date {
            font-size: var(--font-size-sm);
            color: var(--color-gray-600);
            font-weight: var(--font-weight-medium);
            margin-bottom: var(--spacing-sm);
        }
        .timeline-item__title {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-bold);
            color: var(--color-gray-900);
            margin-bottom: var(--spacing-sm);
        }
        .timeline-item__description {
            font-size: var(--font-size-sm);
            color: var(--color-gray-700);
            line-height: 1.6;
        }
        .timeline-item__marker {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: var(--color-success);
            border: 4px solid var(--color-white);
            border-radius: 50%;
            box-shadow: var(--shadow-md);
        }
        .environmental-impact {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
        }
        .impact-card {
            background: linear-gradient(to bottom right, var(--color-white), var(--color-gray-50));
            border-radius: var(--radius-xl);
            padding: var(--spacing-xl);
            border: 2px solid var(--color-gray-200);
            position: relative;
            overflow: hidden;
        }
        .impact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-success), var(--color-primary));
        }
        .impact-card__icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--color-success), var(--color-primary));
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            margin-bottom: var(--spacing-lg);
        }
        .impact-card__value {
            font-size: 36px;
            font-weight: var(--font-weight-bold);
            color: var(--color-gray-900);
            margin-bottom: var(--spacing-xs);
        }
        .impact-card__label {
            font-size: var(--font-size-sm);
            color: var(--color-gray-600);
            margin-bottom: var(--spacing-md);
        }
        .impact-card__details {
            font-size: var(--font-size-sm);
            color: var(--color-gray-700);
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }
            .timeline-item {
                flex-direction: row !important;
                padding-left: 50px;
            }
            .timeline-item__content {
                text-align: left !important;
            }
            .timeline-item__marker {
                left: 20px;
            }
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

            <!-- Waste Reduction Content -->
            <div class="dashboard-content">
                <div class="section">
                    <!-- Impact Hero Section -->
                    <div class="impact-hero">
                        <h1 class="impact-hero__title">Food Waste Reduction Impact</h1>
                        <p class="impact-hero__subtitle">
                            Tracking our collective effort in preventing food waste and reducing environmental impact through strategic food redistribution
                        </p>
                        <div class="impact-stats">
                            <div class="impact-stat">
                                <div class="impact-stat__value">3.8</div>
                                <div class="impact-stat__label">Tons Saved</div>
                                <div class="impact-stat__description">Food rescued from waste</div>
                            </div>
                            <div class="impact-stat">
                                <div class="impact-stat__value">9,580</div>
                                <div class="impact-stat__label">Meals Provided</div>
                                <div class="impact-stat__description">People fed through donations</div>
                            </div>
                            <div class="impact-stat">
                                <div class="impact-stat__value">5.2</div>
                                <div class="impact-stat__label">Tons CO₂ Prevented</div>
                                <div class="impact-stat__description">Carbon emissions avoided</div>
                            </div>
                        </div>
                    </div>

                    <!-- Environmental Impact Cards -->
                    <div class="environmental-impact">
                        <div class="impact-card">
                            <div class="impact-card__icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20Z" fill="currentColor"/>
                                    <path d="M12 6C8.69 6 6 8.69 6 12C6 15.31 8.69 18 12 18C15.31 18 18 15.31 18 12C18 8.69 15.31 6 12 6ZM12 16C9.79 16 8 14.21 8 12C8 9.79 9.79 8 12 8C14.21 8 16 9.79 16 12C16 14.21 14.21 16 12 16Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="impact-card__value">5.2 tons</div>
                            <div class="impact-card__label">CO₂ Emissions Prevented</div>
                            <div class="impact-card__details">
                                Equivalent to removing 1,123 cars from the road for a day. Food waste in landfills produces methane, a potent greenhouse gas.
                            </div>
                        </div>

                        <div class="impact-card">
                            <div class="impact-card__icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2.69L11.34 3.34C7.18 7.5 5 10.5 5 13.5C5 17.09 7.91 20 11.5 20C15.09 20 18 17.09 18 13.5C18 10.5 15.82 7.5 11.66 3.34L12 2.69Z" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                            <div class="impact-card__value">2.8M liters</div>
                            <div class="impact-card__label">Water Conserved</div>
                            <div class="impact-card__details">
                                By preventing food waste, we've saved the water that would have been used to produce this food - enough to fill an Olympic swimming pool.
                            </div>
                        </div>

                        <div class="impact-card">
                            <div class="impact-card__icon">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                                    <path d="M17 8C17 10.2091 14.7614 12 12 12C9.23858 12 7 10.2091 7 8C7 5.79086 9.23858 4 12 4C14.7614 4 17 5.79086 17 8Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M3 21C3 16.5817 7.02944 13 12 13C16.9706 13 21 16.5817 21 21" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="impact-card__value">9,580</div>
                            <div class="impact-card__label">People Served</div>
                            <div class="impact-card__details">
                                Lives improved through redistributed food, providing nutritious meals to those facing food insecurity in our community.
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Trend Chart -->
                    <div class="card" style="margin-bottom: var(--spacing-2xl);">
                        <div class="card__header">
                            <h3 class="card__title">Monthly Waste Reduction Trend</h3>
                            <p style="font-size: var(--font-size-sm); color: var(--color-gray-600); margin-top: var(--spacing-xs);">
                                Tracking food saved from waste over the past 12 months
                            </p>
                        </div>
                        <div class="card__body">
                            <div class="bar-chart">
                                <div class="bar-chart__bars">
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 55%;"></div>
                                        <span class="bar-chart__label">Jan</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 60%;"></div>
                                        <span class="bar-chart__label">Feb</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 68%;"></div>
                                        <span class="bar-chart__label">Mar</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 62%;"></div>
                                        <span class="bar-chart__label">Apr</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 72%;"></div>
                                        <span class="bar-chart__label">May</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 78%;"></div>
                                        <span class="bar-chart__label">Jun</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 85%;"></div>
                                        <span class="bar-chart__label">Jul</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 80%;"></div>
                                        <span class="bar-chart__label">Aug</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 88%;"></div>
                                        <span class="bar-chart__label">Sep</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 82%;"></div>
                                        <span class="bar-chart__label">Oct</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 90%;"></div>
                                        <span class="bar-chart__label">Nov</span>
                                    </div>
                                    <div class="bar-chart__bar-group">
                                        <div class="bar-chart__bar bar-chart__bar--success" style="height: 100%;"></div>
                                        <span class="bar-chart__label">Dec</span>
                                    </div>
                                </div>
                                <div class="bar-chart__legend">
                                    <div class="bar-chart__legend-item">
                                        <span class="bar-chart__legend-color" style="background: var(--color-success);"></span>
                                        <span class="bar-chart__legend-label">Food Saved (kg)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement Timeline -->
                    <div class="card">
                        <div class="card__header">
                            <h3 class="card__title">Milestone Achievements</h3>
                            <p style="font-size: var(--font-size-sm); color: var(--color-gray-600); margin-top: var(--spacing-xs);">
                                Key milestones in our waste reduction journey
                            </p>
                        </div>
                        <div class="card__body">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-item__content">
                                        <div class="timeline-item__date">December 2024</div>
                                        <div class="timeline-item__title">🎉 500 Tons Milestone</div>
                                        <div class="timeline-item__description">
                                            Reached our biggest milestone yet - 500 tons of food saved from waste since program inception. This achievement represents meals for over 50,000 people.
                                        </div>
                                    </div>
                                    <div class="timeline-item__marker"></div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-item__content">
                                        <div class="timeline-item__date">September 2024</div>
                                        <div class="timeline-item__title">🏆 National Recognition</div>
                                        <div class="timeline-item__description">
                                            Awarded "Best Food Waste Reduction Program" by the National Environmental Council for our innovative approach to food redistribution.
                                        </div>
                                    </div>
                                    <div class="timeline-item__marker"></div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-item__content">
                                        <div class="timeline-item__date">June 2024</div>
                                        <div class="timeline-item__title">🌱 Carbon Neutral Operations</div>
                                        <div class="timeline-item__description">
                                            Achieved carbon-neutral status for all distribution operations through electric vehicle fleet and renewable energy at centers.
                                        </div>
                                    </div>
                                    <div class="timeline-item__marker"></div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-item__content">
                                        <div class="timeline-item__date">March 2024</div>
                                        <div class="timeline-item__title">🤝 100+ Partner Donors</div>
                                        <div class="timeline-item__description">
                                            Crossed 100 active donor partners including major restaurants, hotels, and supermarket chains committed to zero food waste.
                                        </div>
                                    </div>
                                    <div class="timeline-item__marker"></div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-item__content">
                                        <div class="timeline-item__date">January 2024</div>
                                        <div class="timeline-item__title">📱 Mobile App Launch</div>
                                        <div class="timeline-item__description">
                                            Launched mobile app for real-time donation tracking, making it easier for donors to contribute and track their environmental impact.
                                        </div>
                                    </div>
                                    <div class="timeline-item__marker"></div>
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

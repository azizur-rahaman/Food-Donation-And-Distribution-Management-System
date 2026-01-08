<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribution Centers - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/card.css">
    <link rel="stylesheet" href="/assets/css/components/button.css">
    <link rel="stylesheet" href="/assets/css/components/form.css">
    <link rel="stylesheet" href="/assets/css/components/modal.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
    <style>
        .centers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: var(--spacing-xl);
        }
        .center-card {
            background: var(--color-white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--color-gray-200);
            overflow: hidden;
            transition: all var(--transition-base);
        }
        .center-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }
        .center-card__header {
            padding: var(--spacing-xl);
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
            color: var(--color-white);
        }
        .center-card__name {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--spacing-xs);
        }
        .center-card__location {
            display: flex;
            align-items: center;
            gap: var(--spacing-xs);
            font-size: var(--font-size-sm);
            opacity: 0.95;
        }
        .center-card__body {
            padding: var(--spacing-xl);
        }
        .center-info {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
        }
        .center-info__item {
            display: flex;
            align-items: flex-start;
            gap: var(--spacing-md);
        }
        .center-info__icon {
            width: 20px;
            height: 20px;
            color: var(--color-primary);
            flex-shrink: 0;
        }
        .center-info__content {
            flex: 1;
        }
        .center-info__label {
            font-size: var(--font-size-xs);
            color: var(--color-gray-600);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: var(--spacing-xs);
        }
        .center-info__value {
            font-size: var(--font-size-sm);
            color: var(--color-gray-900);
            font-weight: var(--font-weight-medium);
        }
        .center-card__footer {
            padding: var(--spacing-lg) var(--spacing-xl);
            border-top: 1px solid var(--color-gray-200);
            background: var(--color-gray-50);
            display: flex;
            gap: var(--spacing-sm);
        }
        .center-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--spacing-md);
            padding: var(--spacing-lg);
            background: var(--color-gray-50);
            border-radius: var(--radius-md);
            margin-bottom: var(--spacing-md);
        }
        .center-stat {
            text-align: center;
        }
        .center-stat__value {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
        }
        .center-stat__label {
            font-size: var(--font-size-xs);
            color: var(--color-gray-600);
            margin-top: var(--spacing-xs);
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

            <!-- Distribution Centers Content -->
            <div class="dashboard-content">
                <div class="section">
                    <div class="section__header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h1 class="section__title">Distribution Centers</h1>
                                <p class="section__subtitle">Manage food distribution centers and locations</p>
                            </div>
                            <button class="btn btn--primary" onclick="openAddCenterModal()">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 4V16M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                Add Center
                            </button>
                        </div>
                    </div>

                    <!-- Overview Stats -->
                    <div class="stats-grid" style="margin-bottom: var(--spacing-2xl);">
                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Total Centers</h3>
                                    <p class="stats-card__value">8</p>
                                    <span class="stats-card__change stats-card__change--positive">
                                        +2 this year
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--ngos">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Active Centers</h3>
                                    <p class="stats-card__value">7</p>
                                    <span class="stats-card__change stats-card__change--positive">
                                        Currently operational
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--donations">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Total Capacity</h3>
                                    <p class="stats-card__value">2.5 tons</p>
                                    <span class="stats-card__change stats-card__change--neutral">
                                        Storage capacity
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--food">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 21V5C16 3.89543 15.1046 3 14 3H10C8.89543 3 8 3.89543 8 5V21" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Centers Grid -->
                    <div class="centers-grid">
                        <!-- Center Card 1 -->
                        <div class="center-card">
                            <div class="center-card__header">
                                <h3 class="center-card__name">Downtown Center</h3>
                                <div class="center-card__location">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 2C6.13401 2 3 5.13401 3 9C3 13.25 10 20 10 20C10 20 17 13.25 17 9C17 5.13401 13.866 2 10 2ZM10 11.5C8.61929 11.5 7.5 10.3807 7.5 9C7.5 7.61929 8.61929 6.5 10 6.5C11.3807 6.5 12.5 7.61929 12.5 9C12.5 10.3807 11.3807 11.5 10 11.5Z"/>
                                    </svg>
                                    123 Main Street, City Center
                                </div>
                            </div>
                            <div class="center-card__body">
                                <div class="center-stats">
                                    <div class="center-stat">
                                        <div class="center-stat__value">450kg</div>
                                        <div class="center-stat__label">Capacity</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">320kg</div>
                                        <div class="center-stat__label">Current</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">71%</div>
                                        <div class="center-stat__label">Usage</div>
                                    </div>
                                </div>

                                <div class="center-info">
                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 3H18C18.5523 3 19 3.44772 19 4V16C19 16.5523 18.5523 17 18 17H2C1.44772 17 1 16.5523 1 16V4C1 3.44772 1.44772 3 2 3Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M19 7L10 12L1 7" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Manager</div>
                                            <div class="center-info__value">John Smith</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 5C2 3.89543 2.89543 3 4 3H16C17.1046 3 18 3.89543 18 5V17C18 18.1046 17.1046 19 16 19H4C2.89543 19 2 18.1046 2 17V5Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M6 1V5M14 1V5M2 9H18" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Operating Hours</div>
                                            <div class="center-info__value">8:00 AM - 6:00 PM</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 4C2 2.89543 2.89543 2 4 2H6C7.10457 2 8 2.89543 8 4V6C8 7.10457 7.10457 8 6 8H4C2.89543 8 2 7.10457 2 6V4Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M12 4C12 2.89543 12.8954 2 14 2H16C17.1046 2 18 2.89543 18 4V6C18 7.10457 17.1046 8 16 8H14C12.8954 8 12 7.10457 12 6V4Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M2 14C2 12.8954 2.89543 12 4 12H6C7.10457 12 8 12.8954 8 14V16C8 17.1046 7.10457 18 6 18H4C2.89543 18 2 17.1046 2 16V14Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M12 14C12 12.8954 12.8954 12 14 12H16C17.1046 12 18 12.8954 18 14V16C18 17.1046 17.1046 18 16 18H14C12.8954 18 12 17.1046 12 16V14Z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Status</div>
                                            <div class="center-info__value">
                                                <span class="badge badge--success">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-card__footer">
                                <button class="btn btn--outline btn--sm" style="flex: 1;">View Details</button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.5858 3.58579C14.3668 2.80474 15.6332 2.80474 16.4142 3.58579C17.1953 4.36683 17.1953 5.63316 16.4142 6.41421L8.82843 14H6V11.1716L13.5858 3.58579Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M3 6H17M8 6V4C8 3.44772 8.44772 3 9 3H11C11.5523 3 12 3.44772 12 4V6M15 6V16C15 16.5523 14.5523 17 14 17H6C5.44772 17 5 16.5523 5 16V6H15Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Center Card 2 -->
                        <div class="center-card">
                            <div class="center-card__header">
                                <h3 class="center-card__name">North District Hub</h3>
                                <div class="center-card__location">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 2C6.13401 2 3 5.13401 3 9C3 13.25 10 20 10 20C10 20 17 13.25 17 9C17 5.13401 13.866 2 10 2ZM10 11.5C8.61929 11.5 7.5 10.3807 7.5 9C7.5 7.61929 8.61929 6.5 10 6.5C11.3807 6.5 12.5 7.61929 12.5 9C12.5 10.3807 11.3807 11.5 10 11.5Z"/>
                                    </svg>
                                    456 North Avenue, District 2
                                </div>
                            </div>
                            <div class="center-card__body">
                                <div class="center-stats">
                                    <div class="center-stat">
                                        <div class="center-stat__value">600kg</div>
                                        <div class="center-stat__label">Capacity</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">180kg</div>
                                        <div class="center-stat__label">Current</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">30%</div>
                                        <div class="center-stat__label">Usage</div>
                                    </div>
                                </div>

                                <div class="center-info">
                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 3H18C18.5523 3 19 3.44772 19 4V16C19 16.5523 18.5523 17 18 17H2C1.44772 17 1 16.5523 1 16V4C1 3.44772 1.44772 3 2 3Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M19 7L10 12L1 7" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Manager</div>
                                            <div class="center-info__value">Sarah Johnson</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 5C2 3.89543 2.89543 3 4 3H16C17.1046 3 18 3.89543 18 5V17C18 18.1046 17.1046 19 16 19H4C2.89543 19 2 18.1046 2 17V5Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M6 1V5M14 1V5M2 9H18" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Operating Hours</div>
                                            <div class="center-info__value">7:00 AM - 8:00 PM</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 4C2 2.89543 2.89543 2 4 2H6C7.10457 2 8 2.89543 8 4V6C8 7.10457 7.10457 8 6 8H4C2.89543 8 2 7.10457 2 6V4Z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Status</div>
                                            <div class="center-info__value">
                                                <span class="badge badge--success">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-card__footer">
                                <button class="btn btn--outline btn--sm" style="flex: 1;">View Details</button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.5858 3.58579C14.3668 2.80474 15.6332 2.80474 16.4142 3.58579C17.1953 4.36683 17.1953 5.63316 16.4142 6.41421L8.82843 14H6V11.1716L13.5858 3.58579Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M3 6H17M8 6V4C8 3.44772 8.44772 3 9 3H11C11.5523 3 12 3.44772 12 4V6M15 6V16C15 16.5523 14.5523 17 14 17H6C5.44772 17 5 16.5523 5 16V6H15Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Center Card 3 -->
                        <div class="center-card">
                            <div class="center-card__header">
                                <h3 class="center-card__name">South Community Center</h3>
                                <div class="center-card__location">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 2C6.13401 2 3 5.13401 3 9C3 13.25 10 20 10 20C10 20 17 13.25 17 9C17 5.13401 13.866 2 10 2ZM10 11.5C8.61929 11.5 7.5 10.3807 7.5 9C7.5 7.61929 8.61929 6.5 10 6.5C11.3807 6.5 12.5 7.61929 12.5 9C12.5 10.3807 11.3807 11.5 10 11.5Z"/>
                                    </svg>
                                    789 South Road, Area 3
                                </div>
                            </div>
                            <div class="center-card__body">
                                <div class="center-stats">
                                    <div class="center-stat">
                                        <div class="center-stat__value">350kg</div>
                                        <div class="center-stat__label">Capacity</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">280kg</div>
                                        <div class="center-stat__label">Current</div>
                                    </div>
                                    <div class="center-stat">
                                        <div class="center-stat__value">80%</div>
                                        <div class="center-stat__label">Usage</div>
                                    </div>
                                </div>

                                <div class="center-info">
                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 3H18C18.5523 3 19 3.44772 19 4V16C19 16.5523 18.5523 17 18 17H2C1.44772 17 1 16.5523 1 16V4C1 3.44772 1.44772 3 2 3Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M19 7L10 12L1 7" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Manager</div>
                                            <div class="center-info__value">Mike Chen</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 5C2 3.89543 2.89543 3 4 3H16C17.1046 3 18 3.89543 18 5V17C18 18.1046 17.1046 19 16 19H4C2.89543 19 2 18.1046 2 17V5Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M6 1V5M14 1V5M2 9H18" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Operating Hours</div>
                                            <div class="center-info__value">9:00 AM - 5:00 PM</div>
                                        </div>
                                    </div>

                                    <div class="center-info__item">
                                        <svg class="center-info__icon" viewBox="0 0 20 20" fill="none">
                                            <path d="M2 4C2 2.89543 2.89543 2 4 2H6C7.10457 2 8 2.89543 8 4V6C8 7.10457 7.10457 8 6 8H4C2.89543 8 2 7.10457 2 6V4Z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <div class="center-info__content">
                                            <div class="center-info__label">Status</div>
                                            <div class="center-info__value">
                                                <span class="badge badge--warning">Maintenance</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-card__footer">
                                <button class="btn btn--outline btn--sm" style="flex: 1;">View Details</button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.5858 3.58579C14.3668 2.80474 15.6332 2.80474 16.4142 3.58579C17.1953 4.36683 17.1953 5.63316 16.4142 6.41421L8.82843 14H6V11.1716L13.5858 3.58579Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                                <button class="btn btn--ghost btn--sm">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                        <path d="M3 6H17M8 6V4C8 3.44772 8.44772 3 9 3H11C11.5523 3 12 3.44772 12 4V6M15 6V16C15 16.5523 14.5523 17 14 17H6C5.44772 17 5 16.5523 5 16V6H15Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Add Center Modal -->
    <div class="modal-overlay" id="addCenterModal">
        <div class="modal modal--lg">
            <div class="modal__header">
                <h3 class="modal__title">Add Distribution Center</h3>
                <button class="modal__close" onclick="closeAddCenterModal()">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="modal__body">
                <form class="form-row">
                    <div class="form-group">
                        <label class="form-label form-label--required">Center Name</label>
                        <input type="text" class="form-input" placeholder="Enter center name">
                    </div>
                    <div class="form-group">
                        <label class="form-label form-label--required">Manager Name</label>
                        <input type="text" class="form-input" placeholder="Enter manager name">
                    </div>
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label class="form-label form-label--required">Address</label>
                        <textarea class="form-textarea" placeholder="Enter full address"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label form-label--required">Storage Capacity (kg)</label>
                        <input type="number" class="form-input" placeholder="Enter capacity">
                    </div>
                    <div class="form-group">
                        <label class="form-label form-label--required">Contact Number</label>
                        <input type="tel" class="form-input" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Opening Time</label>
                        <input type="time" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Closing Time</label>
                        <input type="time" class="form-input">
                    </div>
                </form>
            </div>
            <div class="modal__footer">
                <button class="btn btn--outline" onclick="closeAddCenterModal()">Cancel</button>
                <button class="btn btn--primary">Add Center</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/admin-dashboard.js"></script>
    <script>
        function openAddCenterModal() {
            document.getElementById('addCenterModal').classList.add('modal-overlay--active');
        }

        function closeAddCenterModal() {
            document.getElementById('addCenterModal').classList.remove('modal-overlay--active');
        }
    </script>
</body>
</html>

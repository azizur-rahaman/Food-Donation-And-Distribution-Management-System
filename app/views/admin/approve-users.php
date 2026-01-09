<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Users - Food Donation Management System</title>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/components/table.css">
    <link rel="stylesheet" href="/assets/css/components/button.css">
    <link rel="stylesheet" href="/assets/css/components/card.css">
    <link rel="stylesheet" href="/assets/css/components/stats-card.css">
    <link rel="stylesheet" href="/assets/css/components/modal.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
    <style>
        /* Fix layout overflow */
        .admin-container {
            overflow-x: hidden;
        }

        .main-content {
            width: calc(100% - var(--sidebar-width));
            max-width: calc(100% - var(--sidebar-width));
            margin-left: var(--sidebar-width);
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
            background: var(--color-primary);
            color: white;
            border: none;
            border-radius: var(--radius-lg);
            padding: var(--spacing-md);
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: all var(--transition-base);
        }

        .mobile-menu-toggle:hover {
            background: var(--color-primary-dark);
            transform: scale(1.05);
        }

        /* Mobile Overlay */
        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            transition: opacity var(--transition-base);
        }

        .mobile-overlay.active {
            opacity: 1;
        }

        /* Responsive Table Wrapper */
        .table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Filter Bar Responsive */
        .filter-bar {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .filter-group {
            min-width: max-content;
        }

        /* Desktop Table Optimization */
        .table {
            table-layout: fixed;
            width: 100%;
        }

        .table__th:nth-child(1),
        .table__td:nth-child(1) {
            width: 16%;
        }

        .table__th:nth-child(2),
        .table__td:nth-child(2) {
            width: 8%;
        }

        .table__th:nth-child(3),
        .table__td:nth-child(3) {
            width: 18%;
            word-break: break-word;
            overflow-wrap: break-word;
        }

        .table__th:nth-child(4),
        .table__td:nth-child(4) {
            width: 12%;
        }

        .table__th:nth-child(5),
        .table__td:nth-child(5) {
            width: 10%;
        }

        .table__th:nth-child(6),
        .table__td:nth-child(6) {
            width: 8%;
            text-align: center;
        }

        .table__th:nth-child(7),
        .table__td:nth-child(7) {
            width: 10%;
        }

        .table__th:nth-child(8),
        .table__td:nth-child(8) {
            width: 18%;
        }

        /* Ensure content wraps properly */
        .table__td {
            overflow-wrap: break-word;
            word-wrap: break-word;
        }

        .dashboard-content {
            max-width: 100%;
            overflow-x: hidden;
        }

        .table-card {
            width: 100%;
            overflow-x: auto;
        }
        
        .table-wrapper {
            width: 100%;
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .mobile-overlay {
                display: block;
            }

            .sidebar {
                z-index: 1000;
            }

            .main-content {
                padding-top: 70px;
                margin-left: 0;
                width: 100%;
                max-width: 100%;
            }

            .section__title {
                font-size: var(--font-size-xl);
            }

            .section__subtitle {
                font-size: var(--font-size-xs);
            }

            /* Make action buttons stack on small screens */
            .table__td > div {
                flex-direction: column !important;
                gap: 4px !important;
            }

            .table__td .btn {
                width: 100%;
                justify-content: center;
            }

            /* Reduce padding on mobile */
            .table__th,
            .table__td {
                padding: var(--spacing-sm) var(--spacing-md);
                font-size: 0.75rem;
            }

            /* Filter buttons responsive */
            .filter-bar {
                padding: var(--spacing-md);
            }

            .filter-group .btn {
                font-size: 0.75rem;
                padding: var(--spacing-sm) var(--spacing-md);
                white-space: nowrap;
            }
        }

        @media (max-width: 480px) {
            .mobile-menu-toggle {
                top: 12px;
                left: 12px;
                padding: var(--spacing-sm);
            }

            .main-content {
                padding-top: 60px;
            }

            .section__header {
                margin-bottom: var(--spacing-md);
            }

            .section__title {
                font-size: var(--font-size-lg);
            }

            /* Hide less critical columns on very small screens */
            .table__th:nth-child(4),
            .table__td:nth-child(4),
            .table__th:nth-child(5),
            .table__td:nth-child(5) {
                display: none;
            }

            .filter-group .btn {
                font-size: 0.7rem;
                padding: 6px 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path d="M3 12h18M3 6h18M3 18h18" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <div class="admin-container">
        <!-- Sidebar Component -->
        <?php include __DIR__ . '/../components/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Header Component -->
            <?php include __DIR__ . '/../components/header.php'; ?>

            <!-- Approve Users Content -->
            <div class="dashboard-content">
                <div class="section">
                    <div class="section__header">
                        <h1 class="section__title">Approve Users</h1>
                        <p class="section__subtitle">Review and approve donor and NGO registration requests</p>
                    </div>

                    <!-- Stats Overview -->

                    
                    <div class="stats-grid" style="margin-bottom: var(--spacing-xl);">
                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Pending Approvals</h3>
                                    <p class="stats-card__value">12</p>
                                    <span class="stats-card__change stats-card__change--warning">
                                        Requires attention
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--donations">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M12 8V12M12 16H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Approved This Month</h3>
                                    <p class="stats-card__value">28</p>
                                    <span class="stats-card__change stats-card__change--positive">
                                        +8 from last month
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--meals">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card__content">
                                <div class="stats-card__info">
                                    <h3 class="stats-card__title">Rejected</h3>
                                    <p class="stats-card__value">3</p>
                                    <span class="stats-card__change stats-card__change--neutral">
                                        This month
                                    </span>
                                </div>
                                <div class="stats-card__icon stats-card__icon--ngos">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M10 14L12 12M12 12L14 10M12 12L10 10M12 12L14 14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Filter Tabs -->
                <div class="filter-bar">
                    <div class="filter-group">
                        <button class="btn btn--primary btn--sm">All Pending (12)</button>
                        <button class="btn btn--outline btn--sm">Donors (7)</button>
                        <button class="btn btn--outline btn--sm">NGOs (5)</button>
                        <button class="btn btn--outline btn--sm">Approved (28)</button>
                        <button class="btn btn--outline btn--sm">Rejected (3)</button>
                    </div>
                </div>

                <!-- Pending Applications Table -->
                <div class="table-card">
                    <div class="table-wrapper">
                        <table class="table">
                        <thead class="table__head">
                            <tr>
                                <th class="table__th">Applicant</th>
                                <th class="table__th">Type</th>
                                <th class="table__th">Email</th>
                                <th class="table__th">Phone</th>
                                <th class="table__th">Applied Date</th>
                                <th class="table__th">Documents</th>
                                <th class="table__th">Status</th>
                                <th class="table__th">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table__body">
                            <tr class="table__row">
                                <td class="table__td">
                                    <div style="font-weight: 600;">Hope Foundation</div>
                                    <div style="font-size: 0.75rem; color: var(--color-gray-600);">NGO ID: #NGO-2026-001
                                    </div>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--info">NGO</span>
                                </td>
                                <td class="table__td">contact@hopefoundation.org</td>
                                <td class="table__td">+1 234-567-8901</td>
                                <td class="table__td">Jan 5, 2026</td>
                                <td class="table__td">
                                    <button class="btn-icon" title="View Documents">
                                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z"
                                                stroke="currentColor" stroke-width="2" />
                                        </svg>
                                    </button>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--warning">Pending</span>
                                </td>
                                <td class="table__td">
                                    <div style="display: flex; gap: 8px;">
                                        <button class="btn btn--primary btn--sm"
                                            onclick="approveUser('NGO-2026-001')">Approve</button>
                                        <button class="btn btn--danger btn--sm"
                                            onclick="rejectUser('NGO-2026-001')">Reject</button>
                                    </div>
                                </td>
                            </tr>

                            <tr class="table__row">
                                <td class="table__td">
                                    <div style="font-weight: 600;">Green Valley Restaurant</div>
                                    <div style="font-size: 0.75rem; color: var(--color-gray-600);">Donor ID:
                                        #DNR-2026-015</div>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--success">Donor</span>
                                </td>
                                <td class="table__td">info@greenvalley.com</td>
                                <td class="table__td">+1 234-567-8902</td>
                                <td class="table__td">Jan 6, 2026</td>
                                <td class="table__td">
                                    <button class="btn-icon" title="View Documents">
                                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z"
                                                stroke="currentColor" stroke-width="2" />
                                        </svg>
                                    </button>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--warning">Pending</span>
                                </td>
                                <td class="table__td">
                                    <div style="display: flex; gap: 8px;">
                                        <button class="btn btn--primary btn--sm"
                                            onclick="approveUser('DNR-2026-015')">Approve</button>
                                        <button class="btn btn--danger btn--sm"
                                            onclick="rejectUser('DNR-2026-015')">Reject</button>
                                    </div>
                                </td>
                            </tr>

                            <tr class="table__row">
                                <td class="table__td">
                                    <div style="font-weight: 600;">Community Care Center</div>
                                    <div style="font-size: 0.75rem; color: var(--color-gray-600);">NGO ID: #NGO-2026-002
                                    </div>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--info">NGO</span>
                                </td>
                                <td class="table__td">admin@communitycare.org</td>
                                <td class="table__td">+1 234-567-8903</td>
                                <td class="table__td">Jan 7, 2026</td>
                                <td class="table__td">
                                    <button class="btn-icon" title="View Documents">
                                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z"
                                                stroke="currentColor" stroke-width="2" />
                                        </svg>
                                    </button>
                                </td>
                                <td class="table__td">
                                    <span class="badge badge--warning">Pending</span>
                                </td>
                                <td class="table__td">
                                    <div style="display: flex; gap: 8px;">
                                        <button class="btn btn--primary btn--sm"
                                            onclick="approveUser('NGO-2026-002')">Approve</button>
                                        <button class="btn btn--danger btn--sm"
                                            onclick="rejectUser('NGO-2026-002')">Reject</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Approval Modal -->
    <div class="modal-overlay" id="approvalModal">
        <div class="modal">
            <div class="modal__header">
                <h3 class="modal__title">Approve User</h3>
                <button class="modal__close" onclick="closeModal('approvalModal')">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <div class="modal__body">
                <p>Are you sure you want to approve this user? An account will be created and credentials will be sent
                    to their email.</p>
            </div>
            <div class="modal__footer">
                <button class="btn btn--outline" onclick="closeModal('approvalModal')">Cancel</button>
                <button class="btn btn--primary">Confirm Approval</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/admin-dashboard.js"></script>
    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const sidebar = document.querySelector('.sidebar');

        function toggleMobileMenu() {
            sidebar.classList.toggle('sidebar--open');
            mobileOverlay.classList.toggle('active');
            document.body.style.overflow = sidebar.classList.contains('sidebar--open') ? 'hidden' : '';
        }

        mobileMenuToggle.addEventListener('click', toggleMobileMenu);
        mobileOverlay.addEventListener('click', toggleMobileMenu);

        // Close mobile menu on window resize if open
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && sidebar.classList.contains('sidebar--open')) {
                toggleMobileMenu();
            }
        });

        function approveUser(userId) {
            document.getElementById('approvalModal').classList.add('modal-overlay--active');
        }

        function rejectUser(userId) {
            if (confirm('Are you sure you want to reject this application?')) {
                showToast('Application rejected', 'danger');
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('modal-overlay--active');
        }
    </script>
</body>

</html>
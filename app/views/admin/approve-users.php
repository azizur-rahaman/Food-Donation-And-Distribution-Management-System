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
    <link rel="stylesheet" href="/assets/css/components/modal.css">
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
                                        <path d="M12 8V12M12 16H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
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
                                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
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
                                        <path d="M10 14L12 12M12 12L14 10M12 12L10 10M12 12L14 14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
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
                                        <div style="font-size: 0.75rem; color: var(--color-gray-600);">NGO ID: #NGO-2026-001</div>
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
                                                <path d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </td>
                                    <td class="table__td">
                                        <span class="badge badge--warning">Pending</span>
                                    </td>
                                    <td class="table__td">
                                        <div style="display: flex; gap: 8px;">
                                            <button class="btn btn--primary btn--sm" onclick="approveUser('NGO-2026-001')">Approve</button>
                                            <button class="btn btn--danger btn--sm" onclick="rejectUser('NGO-2026-001')">Reject</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table__row">
                                    <td class="table__td">
                                        <div style="font-weight: 600;">Green Valley Restaurant</div>
                                        <div style="font-size: 0.75rem; color: var(--color-gray-600);">Donor ID: #DNR-2026-015</div>
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
                                                <path d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </td>
                                    <td class="table__td">
                                        <span class="badge badge--warning">Pending</span>
                                    </td>
                                    <td class="table__td">
                                        <div style="display: flex; gap: 8px;">
                                            <button class="btn btn--primary btn--sm" onclick="approveUser('DNR-2026-015')">Approve</button>
                                            <button class="btn btn--danger btn--sm" onclick="rejectUser('DNR-2026-015')">Reject</button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table__row">
                                    <td class="table__td">
                                        <div style="font-weight: 600;">Community Care Center</div>
                                        <div style="font-size: 0.75rem; color: var(--color-gray-600);">NGO ID: #NGO-2026-002</div>
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
                                                <path d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </td>
                                    <td class="table__td">
                                        <span class="badge badge--warning">Pending</span>
                                    </td>
                                    <td class="table__td">
                                        <div style="display: flex; gap: 8px;">
                                            <button class="btn btn--primary btn--sm" onclick="approveUser('NGO-2026-002')">Approve</button>
                                            <button class="btn btn--danger btn--sm" onclick="rejectUser('NGO-2026-002')">Reject</button>
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
                        <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="modal__body">
                <p>Are you sure you want to approve this user? An account will be created and credentials will be sent to their email.</p>
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

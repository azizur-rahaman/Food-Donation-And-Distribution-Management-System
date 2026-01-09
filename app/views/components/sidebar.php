<?php
// Get current path for active menu highlighting
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<aside class="sidebar">
    <div class="sidebar__header">
        <div class="sidebar__logo">
            <svg class="sidebar__logo-icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="18" fill="#2D6A4F"/>
                <path d="M20 10C20 10 15 12 15 18C15 18 13 20 13 23C13 26 15 28 18 28H22C25 28 27 26 27 23C27 20 25 18 25 18C25 12 20 10 20 10Z" fill="white"/>
                <path d="M18 28C18 28 18 30 20 30C22 30 22 28 22 28" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
    </div>

    <nav class="sidebar__nav">
        <ul class="sidebar__menu">
            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/dashboard') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/dashboard" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 4C3 3.44772 3.44772 3 4 3H7C7.55228 3 8 3.44772 8 4V7C8 7.55228 7.55228 8 7 8H4C3.44772 8 3 7.55228 3 7V4Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 4C12 3.44772 12.4477 3 13 3H16C16.5523 3 17 3.44772 17 4V7C17 7.55228 16.5523 8 16 8H13C12.4477 8 12 7.55228 12 7V4Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M3 13C3 12.4477 3.44772 12 4 12H7C7.55228 12 8 12.4477 8 13V16C8 16.5523 7.55228 17 7 17H4C3.44772 17 3 16.5523 3 16V13Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 13C12 12.4477 12.4477 12 13 12H16C16.5523 12 17 12.4477 17 13V16C17 16.5523 16.5523 17 16 17H13C12.4477 17 12 16.5523 12 16V13Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <span class="sidebar__text">Overview</span>
                </a>
            </li>

            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/distribution') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/distribution" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 7L10 3L17 7M3 7L10 11M3 7V13L10 17M17 7L10 11M17 7V13L10 17M10 11V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__text">Distribution</span>
                </a>
            </li>

            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/centers') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/centers" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2C6.13401 2 3 5.13401 3 9C3 13.25 10 20 10 20C10 20 17 13.25 17 9C17 5.13401 13.866 2 10 2ZM10 11.5C8.61929 11.5 7.5 10.3807 7.5 9C7.5 7.61929 8.61929 6.5 10 6.5C11.3807 6.5 12.5 7.61929 12.5 9C12.5 10.3807 11.3807 11.5 10 11.5Z" fill="currentColor"/>
                    </svg>
                    <span class="sidebar__text">Distribution Centers</span>
                </a>
            </li>

            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/reports') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/reports" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V8L9 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 2V8H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__text">Reports</span>
                </a>
            </li>

            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/waste-reduction') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/waste-reduction" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20Z" fill="currentColor"/>
                        <path d="M12 6C8.69 6 6 8.69 6 12C6 15.31 8.69 18 12 18C15.31 18 18 15.31 18 12C18 8.69 15.31 6 12 6ZM12 16C9.79 16 8 14.21 8 12C8 9.79 9.79 8 12 8C14.21 8 16 9.79 16 12C16 14.21 14.21 16 12 16Z" fill="currentColor"/>
                    </svg>
                    <span class="sidebar__text">Waste Reduction</span>
                </a>
            </li>

            <li class="sidebar__menu-item <?php echo ($current_path === '/admin/approve-users') ? 'sidebar__menu-item--active' : ''; ?>">
                <a href="/admin/approve-users" class="sidebar__link">
                    <svg class="sidebar__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 13C8.68629 13 6 15.6863 6 19H18C18 15.6863 15.3137 13 12 13Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M6 10L4 12L2 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__text">Approve Users</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

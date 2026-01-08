# Admin Module - Component Architecture

## Overview
This admin module follows a component-based architecture with modular, reusable UI components built with HTML and CSS.

## Project Structure

```
app/
├── views/
│   ├── admin/
│   │   ├── dashboard.php          # Main dashboard page
│   │   └── distribution.php       # Distribution management page
│   └── components/
│       ├── sidebar.php             # Reusable sidebar component
│       └── header.php              # Reusable header component
│
public/
├── assets/
│   ├── css/
│   │   ├── components/             # Component-specific styles
│   │   │   ├── reset.css          # CSS reset
│   │   │   ├── variables.css      # Design tokens (colors, spacing, etc.)
│   │   │   ├── sidebar.css        # Sidebar component styles
│   │   │   ├── header.css         # Header component styles
│   │   │   ├── stats-card.css     # Statistics card component
│   │   │   ├── chart.css          # Chart components (bar, pie)
│   │   │   ├── table.css          # Table component
│   │   │   └── button.css         # Button component
│   │   └── layouts/
│   │       └── admin-layout.css   # Admin layout structure
│   └── js/
│       └── admin-dashboard.js     # Dashboard interactivity
```

## Components

### 1. Sidebar Component
**File:** `app/views/components/sidebar.php`
- Reusable navigation sidebar
- Active state management
- Icon-based menu items
- Responsive mobile toggle

**Usage:**
```php
<?php include __DIR__ . '/../components/sidebar.php'; ?>
```

### 2. Header Component
**File:** `app/views/components/header.php`
- Search functionality
- Notification bell with badge
- Responsive design

**Usage:**
```php
<?php include __DIR__ . '/../components/header.php'; ?>
```

### 3. Stats Card Component
**Styles:** `public/assets/css/components/stats-card.css`
- Display key metrics
- Icon support
- Trend indicators (positive/negative/neutral)
- Hover effects

**HTML Structure:**
```html
<div class="stats-card">
    <div class="stats-card__content">
        <div class="stats-card__info">
            <h3 class="stats-card__title">Title</h3>
            <p class="stats-card__value">1,221</p>
            <span class="stats-card__change stats-card__change--positive">
                +12% from last month
            </span>
        </div>
        <div class="stats-card__icon stats-card__icon--donations">
            <!-- SVG Icon -->
        </div>
    </div>
</div>
```

### 4. Chart Components
**Styles:** `public/assets/css/components/chart.css`

#### Bar Chart
- Vertical bars with dual data series
- Y-axis labels
- Legend
- Hover effects

#### Pie Chart
- SVG-based circular segments
- Center label
- Interactive legend
- Smooth animations

### 5. Table Component
**Styles:** `public/assets/css/components/table.css`
- Data table with headers
- Row hover effects
- Badge support for status
- Responsive horizontal scroll

**HTML Structure:**
```html
<div class="table-card">
    <table class="table">
        <thead class="table__head">
            <tr>
                <th class="table__th">Column 1</th>
                <th class="table__th">Column 2</th>
            </tr>
        </thead>
        <tbody class="table__body">
            <tr class="table__row">
                <td class="table__td">Data 1</td>
                <td class="table__td">Data 2</td>
            </tr>
        </tbody>
    </table>
</div>
```

### 6. Button Component
**Styles:** `public/assets/css/components/button.css`

**Variants:**
- Primary: `.btn--primary`
- Secondary: `.btn--secondary`
- Outline: `.btn--outline`
- Ghost: `.btn--ghost`
- Danger: `.btn--danger`
- Icon: `.btn-icon`

**Sizes:**
- Small: `.btn--sm`
- Default
- Large: `.btn--lg`

## Design System

### Color Palette
Defined in `variables.css`:
- Primary: `#2D6A4F` (Green)
- Secondary: `#52B788` (Light Green)
- Success: `#52B788`
- Warning: `#FFB703`
- Danger: `#E63946`
- Gray scale: 50-900

### Typography
- Font Family: System fonts (-apple-system, BlinkMacSystemFont, etc.)
- Font Sizes: xs (12px) to 4xl (36px)
- Font Weights: 400, 500, 600, 700

### Spacing Scale
- xs: 4px
- sm: 8px
- md: 16px
- lg: 24px
- xl: 32px
- 2xl: 48px
- 3xl: 64px

### Border Radius
- sm: 4px
- md: 8px
- lg: 12px
- xl: 16px
- full: 9999px

## Responsive Breakpoints

```css
/* Mobile */
@media (max-width: 480px) { }

/* Tablet */
@media (max-width: 768px) { }

/* Desktop */
@media (max-width: 1200px) { }
```

## JavaScript Features

**File:** `public/assets/js/admin-dashboard.js`

Features:
- Mobile sidebar toggle
- Notification interactions
- Stats counter animations
- Chart animations on scroll
- Utility functions (formatNumber, formatDate, showToast)

## How to Use

### 1. Create a New Admin Page

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title - Food Donation Management System</title>
    
    <!-- Required CSS Files -->
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <!-- Add other component CSS as needed -->
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
</head>
<body>
    <div class="admin-container">
        <!-- Include Sidebar -->
        <?php include __DIR__ . '/../components/sidebar.php'; ?>

        <main class="main-content">
            <!-- Include Header -->
            <?php include __DIR__ . '/../components/header.php'; ?>

            <!-- Page Content -->
            <div class="dashboard-content">
                <!-- Your content here -->
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/admin-dashboard.js"></script>
</body>
</html>
```

### 2. Adding the JavaScript to Dashboard

Update the dashboard.php file to include the JavaScript:

```html
<script src="/assets/js/admin-dashboard.js"></script>
```

## Best Practices

1. **Component Reusability**: Always use existing components before creating new ones
2. **CSS Naming**: Follow BEM (Block Element Modifier) convention
3. **Responsive Design**: Mobile-first approach
4. **Accessibility**: Use semantic HTML and ARIA labels
5. **Performance**: Minimize CSS and JS files in production
6. **Consistency**: Use design tokens from `variables.css`

## Future Enhancements

- [ ] Add modal component
- [ ] Add form components
- [ ] Add dropdown component
- [ ] Add pagination component
- [ ] Add loading states
- [ ] Add dark mode support
- [ ] Add animation library integration
- [ ] Add chart library (Chart.js or D3.js) integration

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

This component architecture is part of the Food Donation and Distribution Management System.

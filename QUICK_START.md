# Quick Start Guide

## 🚀 Getting Started with the Admin Module

### Step 1: View the Component Library
```
Open: app/views/components/component-library.html
```
This shows all available UI components with live examples.

### Step 2: View the Dashboard
```
Open: app/views/admin/dashboard.php
```
This is the main admin dashboard with stats and charts.

### Step 3: Understanding the Structure

#### CSS Files (Load in this order):
1. `reset.css` - Resets browser defaults
2. `variables.css` - Design tokens (colors, spacing, etc.)
3. Component CSS files (sidebar, header, etc.)
4. `admin-layout.css` - Layout structure

#### Example HTML Template:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/css/components/reset.css">
    <link rel="stylesheet" href="/assets/css/components/variables.css">
    <link rel="stylesheet" href="/assets/css/components/sidebar.css">
    <link rel="stylesheet" href="/assets/css/components/header.css">
    <link rel="stylesheet" href="/assets/css/layouts/admin-layout.css">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/../components/sidebar.php'; ?>
        
        <main class="main-content">
            <?php include __DIR__ . '/../components/header.php'; ?>
            
            <div class="dashboard-content">
                <!-- Your content here -->
            </div>
        </main>
    </div>
    
    <script src="/assets/js/admin-dashboard.js"></script>
</body>
</html>
```

### Step 4: Using Components

#### Button
```html
<button class="btn btn--primary">Primary Button</button>
<button class="btn btn--secondary">Secondary</button>
<button class="btn btn--outline">Outline</button>
```

#### Stats Card
```html
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
            <!-- SVG icon -->
        </div>
    </div>
</div>
```

#### Form Input
```html
<div class="form-group">
    <label class="form-label">Email</label>
    <input type="email" class="form-input" placeholder="Enter email">
    <span class="form-help">Help text</span>
</div>
```

#### Alert
```html
<div class="alert alert--success">
    <div class="alert__content">
        <div class="alert__title">Success!</div>
        <div class="alert__message">Action completed.</div>
    </div>
</div>
```

#### Table
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

### Step 5: JavaScript Utilities

```javascript
// Format number with commas
formatNumber(1234567); // "1,234,567"

// Format date
formatDate('2026-01-08'); // "Jan 8, 2026"

// Show toast notification
showToast('Success message', 'success');
showToast('Warning message', 'warning');
showToast('Error message', 'danger');

// Confirm dialog
const confirmed = await confirmDialog('Are you sure?');
if (confirmed) {
    // Do something
}
```

### Step 6: Customization

#### Change Colors
Edit `public/assets/css/components/variables.css`:
```css
:root {
    --color-primary: #2D6A4F;  /* Change this */
    --color-secondary: #52B788; /* Change this */
}
```

#### Add New Component
1. Create CSS file: `public/assets/css/components/my-component.css`
2. Follow BEM naming: `.my-component`, `.my-component__element`, `.my-component--modifier`
3. Use CSS variables from `variables.css`
4. Link in HTML: `<link rel="stylesheet" href="/assets/css/components/my-component.css">`

### Common CSS Classes

#### Spacing
```html
<!-- Margin -->
<div style="margin: var(--spacing-md)"></div>

<!-- Padding -->
<div style="padding: var(--spacing-lg)"></div>
```

#### Colors
```html
<!-- Background -->
<div style="background: var(--color-primary)"></div>

<!-- Text -->
<div style="color: var(--color-gray-700)"></div>
```

#### Typography
```html
<!-- Font Size -->
<p style="font-size: var(--font-size-lg)"></p>

<!-- Font Weight -->
<p style="font-weight: var(--font-weight-semibold)"></p>
```

### Responsive Design

Components automatically adjust for different screen sizes:
- **Desktop**: Full layout with sidebar
- **Tablet**: Adjusted spacing
- **Mobile**: Collapsible sidebar, stacked layout

### Browser Compatibility

✅ Chrome (latest)
✅ Firefox (latest)
✅ Safari (latest)
✅ Edge (latest)
✅ Mobile browsers

### Need Help?

1. Check `ADMIN_MODULE_README.md` for detailed documentation
2. View `component-library.html` for visual examples
3. Inspect existing pages (`dashboard.php`, `distribution.php`) for usage patterns

### File Locations

```
📁 Views: app/views/admin/
📁 Components: app/views/components/
📁 CSS: public/assets/css/
📁 JavaScript: public/assets/js/
📁 Docs: ADMIN_MODULE_README.md
```

---

**Happy Coding! 🎉**

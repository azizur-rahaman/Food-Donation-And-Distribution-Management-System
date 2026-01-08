<?php
// Simple router for the admin module
$request_uri = $_SERVER['REQUEST_URI'];

// Remove query string
$path = parse_url($request_uri, PHP_URL_PATH);

// Route handling
switch ($path) {
    case '/':
    case '/index.php':
        // Serve dashboard as home
        include __DIR__ . '/../app/views/admin/dashboard.php';
        break;
        
    case '/dashboard':
    case '/admin/dashboard':
        include __DIR__ . '/../app/views/admin/dashboard.php';
        break;
        
    case '/distribution':
    case '/admin/distribution':
        include __DIR__ . '/../app/views/admin/distribution.php';
        break;
        
    case '/approve-users':
    case '/admin/approve-users':
        include __DIR__ . '/../app/views/admin/approve-users.php';
        break;
        
    case '/centers':
    case '/distribution-centers':
    case '/admin/centers':
        include __DIR__ . '/../app/views/admin/centers.php';
        break;
        
    case '/reports':
    case '/admin/reports':
        include __DIR__ . '/../app/views/admin/reports.php';
        break;
        
    case '/waste-reduction':
    case '/admin/waste-reduction':
        include __DIR__ . '/../app/views/admin/waste-reduction.php';
        break;
        
    case '/components':
        include __DIR__ . '/../app/views/components/component-library.html';
        break;
        
    case '/architecture':
        include __DIR__ . '/../app/views/components/architecture-diagram.html';
        break;
        
    default:
        // Try to serve static files from public directory
        $file = __DIR__ . $path;
        if (file_exists($file) && is_file($file)) {
            return false; // Let PHP built-in server handle the file
        }
        
        // 404 Not Found
        http_response_code(404);
        echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>404 - Not Found</title>
    <style>
        body { 
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            text-align: center; 
            padding: 50px;
            background: linear-gradient(135deg, #2D6A4F 0%, #40916C 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 { 
            font-size: 4rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        a { 
            color: white;
            background: rgba(255,255,255,0.2);
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s;
        }
        a:hover {
            background: rgba(255,255,255,0.3);
        }
        .links {
            margin-top: 30px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .links a {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>The page you are looking for does not exist.</p>
    <a href="/">← Go to Dashboard</a>
    <div class="links">
        <a href="/dashboard">Dashboard</a>
        <a href="/distribution">Distribution</a>
        <a href="/components">Components</a>
        <a href="/architecture">Architecture</a>
    </div>
</body>
</html>';
        break;
}
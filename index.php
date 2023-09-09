<?php
require_once ('config.php');

// Define your routes as an associative array where the key is the URL path and
// the value is the corresponding action or controller.
$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/contact' => 'contact',
];

// Get the current URL path.
$requestUri = $_SERVER['REQUEST_URI'];

// Remove any query string from the URL.
$uriParts = explode('?', $requestUri);
$path = $uriParts[0];

// Check if the requested URL path exists in the defined routes.
if (array_key_exists($path, $routes)) {
    $action = $routes[$path];

    // Include the corresponding controller or perform the action.
    switch ($action) {
        case 'home':
            require_once ('home.php');
            break;
        case 'about':
            echo 'About us';
            break;
        case 'contact':
            echo 'Contact us';
            break;
        default:
            // Handle 404 - Page not found.
            header("HTTP/1.0 404 Not Found");
            echo '404 - Page not found';
            break;
    }
} else {
    // Handle 404 - Page not found.
    header("HTTP/1.0 404 Not Found");
    echo '404 - Page not found';
}

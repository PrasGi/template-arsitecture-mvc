<?php
// Initialize Composer autoloading
require_once 'vendor/autoload.php';

// Define your routes
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Simple routing mechanism
switch ($uri) {
    case '/':
        require 'view/home.php';
        break;
    case '/users':
        require 'view/User.php';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}

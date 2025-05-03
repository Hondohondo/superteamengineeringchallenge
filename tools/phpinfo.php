<?php
$client_ip = $_SERVER['REMOTE_ADDR']; // Store the client's IP in a variable
$allowed_ip = '127.0.0.1'; // Replace with your trusted IP address
if ($_SERVER['REMOTE_ADDR'] !== $allowed_ip) {
    die("Access denied: Your IP ({$client_ip}) is not whitelisted");
}

phpinfo();

// Define your username and password for access
/*$username = 'nandi';
$password = 'Amigo-97'; // Replace with a strong password

// Prompt user for authentication if credentials are missing or incorrect
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] !== $username || $_SERVER['PHP_AUTH_PW'] !== $password) {
    // Send headers to trigger the browser's basic auth dialog
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die('Access denied: You must authenticate to access this page.');
}

// If authenticated, display phpinfo()
phpinfo();*/

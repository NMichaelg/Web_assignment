<?php
// Include database configuration file
include_once __DIR__ . '/../config/Database.php';

// Instantiate database and get connection
$database = new Database();
$db = $database->getConnection();

// Check if the 'page' parameter exists in the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to 'home' if no page is set

// Define the base path for your pages folder
$base_path = __DIR__ . '/../views/';

// Determine the file to include based on the page
switch ($page) {
    case 'home':
        $file_path = $base_path . '';
        break;
    case 'views_cvs':
        $file_path = $base_path . '';
        break;
    case 'contact_us':
        $file_path = $base_path . '';
        break;
    default:
        $file_path = $base_path . 'login_reg/login_reg.php';
        break;
}

// Check if the file exists before including it
if (file_exists($file_path)) {
    include $file_path;
} else {
    // Display a user-friendly error message if the file is missing
    echo "<h2>404 - Page not found</h2>";
    echo "<p>The page you are looking for does not exist.</p>";
}
?>
<?php
include_once __DIR__ . '/../config/Database.php';


$database = new Database();
$db = $database->getConnection();


$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 


$base_path = __DIR__ . '/../views/';


switch ($page) {
    case 'home':
        $file_path = $base_path . 'home/home.php';
        break;
    case 'your_cv':
        $file_path = $base_path . 'cv_builder/cv.php';
        break;
    case 'contact_us':
        $file_path = $base_path . 'contact_us/contact_us.php';
        break;
    default:
        $file_path = $base_path . 'login_reg/login_reg.php';
        break;
}

// Check if the file exists before including it
if (file_exists($file_path)) {
    if (!isset($_SESSION['user_id']) && $page == 'your_cv') {
        include 'views/login_reg/login_reg.php'; 
        exit();  // Make sure the script stops executing after the redirect
    }else{
        include $file_path;
    }
} else {
    // Display a user-friendly error message if the file is missing
    echo "<h2>404 - Page not found</h2>";
    echo "<p>The page you are looking for does not exist.</p>";
}
?>
<?php
// Check if the 'page' parameter exists in the URL
$page = isset($_GET['page']) ? $_GET['page'] : ''; // Default to 'home'

// Define the base path for your pages folder
$base_path = __DIR__ . '/../views/';
$file_path = '';

switch ($page) {
    case 'home':
        $file_path = $base_path . 'home.php';
        break;
    case 'views_cv':
        $file_path = $base_path . 'show_cv/show_cv.php';
        break;
    case 'contact_us':
        $file_path = $base_path . 'contact_us.php';
        break;
    case 'fill_form':
        $file_path = $base_path . 'cv_builder/cv.php';
        break;
    default:
        $file_path = $base_path . 'login_reg/login_reg.php';
        break;
}

// Debugging: Output resolved file path
//$a = var_dump($file_path);

if (is_dir($file_path)) {
    echo "<h2>Error: Path points to a directory, not a file</h2>";
} elseif (file_exists($file_path)) {
    include $file_path;
} else {
    echo "<h2>404 - Page not found</h2>";
    echo "<p>The page you are looking for does not exist.</p>";
}
?>
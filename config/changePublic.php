<?php
session_start();
header('Content-Type: application/json');
include_once __DIR__ . '/database.php';

ini_set('display_errors', 1);  // Display errors in the browser (for debugging)
ini_set('log_errors', 1);      // Log errors
ini_set('error_log', __DIR__ . '/error_log.txt'); // Path to error log file
error_reporting(E_ALL);   

$id = intval($_SESSION['user_id']);

if ($id <= 0) {
    echo json_encode(['error' => 'Invalid ID parameter.']);
    exit();
}

$database = new Database();
$db = $database->getConnection();

try {
    $cvQuery = "SELECT 
                    public
                FROM user_cv 
                WHERE id = :id";
    $cvStmt = $db->prepare($cvQuery);
    $cvStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $cvStmt->execute();
    $cvInfo = $cvStmt->fetch(PDO::FETCH_ASSOC);


    if($cvInfo){
        if($cvInfo['public'] == 0){
            $stmt = $db->prepare("UPDATE user_cv SET public = :new_public WHERE id = :id");
            $stmt->execute([
                ':new_public'=> 1,
                ':id' => $id
            ]);
            echo "<script>alert('Publish CV successfully');</script>";
        }else{
            $stmt = $db->prepare("UPDATE user_cv SET public = :new_public WHERE id = :id");
            $stmt->execute([
                ':id' => $id,
                ':new_public' => 0
            ]);
            echo "<script>alert('Unpublish CV successfully');</script>";
        }
    }
    
} catch (Exception $e) {
    error_log("Error fetching CV data: " . $e->getMessage());
    echo json_encode(['error' => $e->getMessage()]);
}

    $redirectUrl = $_SERVER['HTTP_REFERER'] ?? '/Web_assignment/index.php';
    header("Location: $redirectUrl");

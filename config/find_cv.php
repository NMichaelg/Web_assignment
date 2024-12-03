<?php
header('Content-Type: application/json');
include_once __DIR__ . '/database.php';

ini_set('display_errors', 1);  // Display errors in the browser (for debugging)
ini_set('log_errors', 1);      // Log errors
ini_set('error_log', __DIR__ . '/error_log.txt'); // Path to error log file
error_reporting(E_ALL);   

$id = intval($_GET['id']);

if ($id <= 0) {
    echo json_encode(['error' => 'Invalid ID parameter.']);
    exit();
}

$database = new Database();
$db = $database->getConnection();

try {
    $cvQuery = "SELECT 
                    fname, 
                    mname, 
                    lname, 
                    img, 
                    email,
                    public
                FROM user_cv 
                WHERE id = :id";
    $cvStmt = $db->prepare($cvQuery);
    $cvStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $cvStmt->execute();
    $cvInfo = $cvStmt->fetch(PDO::FETCH_ASSOC);

    if (!$cvInfo) {
        echo json_encode(['error' => 'No CV data found for the given ID.']);
        exit();
    }



    // Fetch Related Data
    $queries = [
        'phones' => "SELECT phone FROM user_phone WHERE id = :id",
        'addresses' => "SELECT country, city, street FROM user_address WHERE id = :id",
        'achievements' => "SELECT title, description FROM user_achievement WHERE id = :id",
        'experiences' => "SELECT title, company, location, start_date, end_date, description FROM user_experience WHERE id = :id",
        'educations' => "SELECT school, degree, year, specialization, description FROM user_education WHERE id = :id",
        'projects' => "SELECT pname, plink, description FROM user_project WHERE id = :id",
        'skills' => "SELECT skill, year FROM user_skill WHERE id = :id"
    ];

    $relatedData = [];
    foreach ($queries as $key => $sql) {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $relatedData[$key] = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }

    // Build and Return Response
    $response = [
        'cv_info' => $cvInfo,
        'phones' => $relatedData['phones'],
        'addresses' => $relatedData['addresses'],
        'achievements' => $relatedData['achievements'],
        'experiences' => $relatedData['experiences'],
        'educations' => $relatedData['educations'],
        'projects' => $relatedData['projects'],
        'skills' => $relatedData['skills']
    ];

    echo json_encode($response);

} catch (Exception $e) {
    error_log("Error fetching CV data: " . $e->getMessage());
    echo json_encode(['error' => 'An error occurred while fetching data.']);
}

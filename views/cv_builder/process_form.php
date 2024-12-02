<?php
// Enable error reporting for debugging (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Read the raw POST data from the Ajax request
$data = json_decode(file_get_contents("php://input"), true);

// Check if the data is valid
if ($data) {
    // Extract the data into variables (you can process the data as needed)
    $firstname = $data['firstname'];
    $middlename = $data['middlename'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    
    // You can now insert this data into a database, send it in an email, or whatever you need
    // For example, insert into the database (pseudocode):
    // $db->insert('table_name', ['firstname' => $firstname, 'email' => $email, ...]);

    // Respond with a success message or status
    echo json_encode([
        'status' => 'success',
        'message' => 'Form data processed successfully.',
    ]);
} else {
    // Handle errors (e.g., invalid JSON or missing data)
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid data received.',
    ]);
}
?>

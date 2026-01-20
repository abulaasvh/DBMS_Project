<?php
// ============================================
// ADD NEW STUDENT
// File: add_student.php
// ============================================

header('Content-Type: application/json');
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data - MUST match the form field names!
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $roll_number = $conn->real_escape_string($_POST["roll_number"]);
    $class_id = intval($_POST["class_id"]);
    
    // SQL query to insert student
    $sql = "INSERT INTO students (StudentName, Email, Phone, RollNumber, ClassId) 
            VALUES ('$name', '$email', '$phone', '$roll_number', $class_id)";
    
    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Student added successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}

$conn->close();
?>


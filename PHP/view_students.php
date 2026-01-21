<?php
// Include database connection
include 'config.php';

$message = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data and sanitize
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $class_id = intval($_POST["class_id"]);
    $roll_number = $conn->real_escape_string($_POST["roll_number"]);
    
    // SQL query to insert student
    $sql = "INSERT INTO students (student_name, email, phone, class_id, roll_number) 
            VALUES ('$name', '$email', '$phone', $class_id, '$roll_number')";
    
    // Execute query
    if ($conn->query($sql) === TRUE) {
        $message = "✅ Student added successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>
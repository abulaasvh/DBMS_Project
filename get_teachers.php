<?php
// ============================================
// GET ALL TEACHERS
// File: get_teachers.php
// Returns all teachers from database as JSON
// ============================================

header('Content-Type: application/json');
include 'config.php';

// Query to get all teachers
$sql = "SELECT 
    TeacherID,
    TeacherName,
    Email,
    Phone,
    Department
FROM Teachers
ORDER BY TeacherName";

// Run the query
$result = $conn->query($sql);
$teachers = array();

// Check if query was successful
if ($result) {
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }
    }
}

// Return JSON
echo json_encode($teachers);

$conn->close();
?>

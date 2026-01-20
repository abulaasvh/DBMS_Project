<?php
// ============================================
// GET ALL STUDENTS
// File: get_students.php
// ============================================

header('Content-Type: application/json');
include 'config.php';

// Query to get all students with class information
$sql = "SELECT 
    s.StudentID,
    s.StudentName,
    s.RollNumber,
    s.Email,
    s.Phone,
    c.ClassName
FROM Students s
LEFT JOIN Classes c ON s.ClassID = c.ClassID
ORDER BY s.StudentName";

$result = $conn->query($sql);
$students = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

echo json_encode($students);
$conn->close();

?>
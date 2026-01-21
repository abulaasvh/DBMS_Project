<?php
// ============================================
// MARK ATTENDANCE
// File: mark_attendance.php
// ============================================

header('Content-Type: application/json');
include 'config.php';

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get form data
    $studentId = intval($_POST['studentId']);
    $subjectId = intval($_POST['subjectId']);
    $date = $conn->real_escape_string($_POST['date']);
    $status = $conn->real_escape_string($_POST['status']);
    $remarks = isset($_POST['remarks']) ? $conn->real_escape_string($_POST['remarks']) : '';

    // SQL query to insert or update attendance
    $sql = "INSERT INTO Attendance (StudentID, SubjectID, AttendanceDate, Status, Remarks) 
            VALUES ($studentId, $subjectId, '$date', '$status', '$remarks')
            ON DUPLICATE KEY UPDATE 
            Status = VALUES(Status), 
            Remarks = VALUES(Remarks)";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Attendance marked successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

$conn->close();

?>
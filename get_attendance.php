<?php
// ============================================
// GET ATTENDANCE REPORTS
// File: get_attendance.php
// ============================================

header('Content-Type: application/json');
include 'config.php';

// Get date from URL parameter, default to today
$date = isset($_GET['date']) ? $conn->real_escape_string($_GET['date']) : date('Y-m-d');
$classId = isset($_GET['classId']) ? intval($_GET['classId']) : '';

// Build SQL query
$sql = "SELECT 
    s.StudentID,
    s.StudentName,
    s.RollNumber,
    sub.SubjectName,
    a.AttendanceDate,
    a.Status,
    a.Remarks
FROM Attendance a
JOIN Students s ON a.StudentID = s.StudentID
JOIN Subjects sub ON a.SubjectID = sub.SubjectID
WHERE a.AttendanceDate = '$date'";

// Add class filter if provided
if (!empty($classId)) {
    $sql .= " AND s.ClassID = $classId";
}

$sql .= " ORDER BY s.StudentName";

// Execute query
$result = $conn->query($sql);
$attendance = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $attendance[] = $row;
    }
}

// Return JSON response
echo json_encode($attendance);
$conn->close();

?>
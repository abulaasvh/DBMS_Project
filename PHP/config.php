<?php
// ============================================
// DATABASE CONNECTION CONFIGURATION
// File: config.php
// Place this file in your project folder
// ============================================

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";  // Leave blank if no password
$database = "attendance_system";

// Create connection using MySQLi
$conn = new mysqli($servername, $username, $password, $database);

// Check if connection was successful
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Set charset to UTF-8
$conn->set_charset("utf8");

// If you want to test connection, uncomment:
// echo "Connected successfully to database!";

?>
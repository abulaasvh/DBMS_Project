<?php
// ============================================
// TEST DATABASE CONNECTION
// File: test_connection.php
// ============================================

include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Connection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #667eea;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔌 Database Connection Test</h1>
        
        <?php
        // Check if connection is successful
        if ($conn->connect_error) {
            echo "<div class='error'>";
            echo "<h2>❌ Connection Failed!</h2>";
            echo "<p><strong>Error:</strong> " . $conn->connect_error . "</p>";
            echo "</div>";
        } else {
            echo "<div class='success'>";
            echo "<h2>✓ Connection Successful!</h2>";
            echo "<p>Connected to database: <strong>" . $database . "</strong></p>";
            echo "</div>";
            
            // Show all tables
            $result = $conn->query("SHOW TABLES");
            
            echo "<h2>📊 Tables in Database:</h2>";
            
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Table Name</th><th>Number of Records</th></tr>";
                
                while($row = $result->fetch_row()) {
                    $tableName = $row[0];
                    $countResult = $conn->query("SELECT COUNT(*) FROM " . $tableName);
                    $countRow = $countResult->fetch_row();
                    $recordCount = $countRow[0];
                    
                    echo "<tr>";
                    echo "<td>" . $tableName . "</td>";
                    echo "<td>" . $recordCount . " records</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "<p>No tables found in database.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>

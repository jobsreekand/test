<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Database Connection</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        table { border-collapse: collapse; width: 50%; background-color: white; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #0078D7; color: white; }
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h1>🚀 Test Website: Test Database Output</h1>

    <?php
    // --- Database Connection Variables ---
    $host = 'db'; // This will be the hostname or IP of your MySQL server
    $db   = 'test';
    $user = 'admin';
    $pass = 'Passwd811#';

    // 1. Establish Connection
    $conn = new mysqli($host, $user, $pass, $db);

    // 2. Check Connection
    if ($conn->connect_error) {
        die("<p class='error'>Database Connection Failed: " . $conn->connect_error . "</p>");
    } 
    echo "<p class='success'>✅ Successfully connected to MySQL database!</p>";

    // 3. Query the Database
    // Assuming you have a table named 'employees' with columns 'id', 'name', and 'role'
    $sql = "SELECT id, name, role FROM employees";
    $result = $conn->query($sql);

    // 4. Display Results in an HTML Table
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Role</th></tr>";
        
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["role"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found in the table.</p>";
    }

    // 5. Close Connection
    $conn->close();
    ?>

</body>
</html>

<?php
    $serverName = "swe5006svr.mysql.database.azure.com"; // Update with your Azure MySQL server name
    $username = "swe5006"; // Update with your Azure MySQL username
    $password = "P@ssw0rd"; // Update with your Azure MySQL password
    $databaseName = "dg01"; // Update with your Azure MySQL database name

    // Establishing the connection
    $conn = new mysqli($serverName, $username, $password, $databaseName);

    // Checking the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

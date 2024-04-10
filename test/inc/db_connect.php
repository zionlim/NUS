<?php
    $serverName = "swe5006svr.mysql.database.azure.com"; // Update with your Azure MySQL server name
    $username = "swe5006"; // Update with your Azure MySQL username
    $password = "P@ssw0rd"; // Update with your Azure MySQL password
    $databaseName = "dg01"; // Update with your Azure MySQL database name

	$conn = mysqli_init();
	
	mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
	
	mysqli_real_connect($conn, $serverName, $username, $password, $databaseName, 3306, NULL, MYSQLI_CLIENT_SSL);

    // Checking the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

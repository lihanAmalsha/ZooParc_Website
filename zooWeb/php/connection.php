<?php
// Database credentials
$servername = "localhost";
$username = "root"; // default username for WAMP
$password = ""; // default password is empty
$dbname = "zooparc_zoo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection (optional, as PHP will close it at the end of the script)
$conn->clos

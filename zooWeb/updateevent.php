<?php
include_once("connection.php");
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $EventName = $_POST["EventName"];
    $description = $_POST["description"];

    // Escape user input to prevent SQL injection (basic, not recommended for production)
    $id = mysqli_real_escape_string($conn, $id);
    $EventName = mysqli_real_escape_string($conn, $EventName);
    $description = mysqli_real_escape_string($conn, $description);

    $sql = "UPDATE detailedevents SET Event_Name = '$EventName', Discription = '$description' WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Event updated successfully";
        header('location: adminpanel.php');

    } else {
        echo "Error updating event: " . $conn->error;
    }
}

$conn->close();
?>
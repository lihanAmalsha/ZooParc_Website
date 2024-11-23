<?php
    include_once("connection.php");
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EventName = $_POST["EventName"];
    // $lastName = $_POST["lastName"];
    // $email = $_POST["email"];
    $description = $_POST["description"];

    // Escape user input to prevent SQL injection (basic, not recommended for production)
    $EventName = mysqli_real_escape_string($conn, $EventName);
    $description = mysqli_real_escape_string($conn, $description);


    // $sql = "UPDATE zoo_event1 SET Event_Name = '$eventName', Date = '$date', Time = '$time', Description = '$description' WHERE id = $id";
    $sql = "INSERT INTO detailedevents (Event_Name, Discription) VALUES ('$EventName','$description')";

    if ($conn->query($sql) === TRUE) {
        echo "add event successfully";
         header('location: adminpanel.php');
    //    header('location: From1.php');

    } else {
        echo "Error added event: " . $conn->error;
    }
}

$conn->close();
?>

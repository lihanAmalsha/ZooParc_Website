<?php
    include_once("connection.php");
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Escape user input to prevent SQL injection (basic, not recommended for production)
    $fullName = mysqli_real_escape_string($conn, $fullName);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);


    // $sql = "UPDATE zoo_event1 SET Event_Name = '$eventName', Date = '$date', Time = '$time', Description = '$description' WHERE id = $id";
    $sql = "INSERT INTO education (fullName ,email, message) VALUES ('$fullName','$email','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "add event successfully";
         header('location: index.html');
    //    header('location: From1.php');

    } else {
        echo "Error added event: " . $conn->error;
    }
}

$conn->close();
?>

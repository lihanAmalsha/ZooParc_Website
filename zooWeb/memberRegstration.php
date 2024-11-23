<?php
    include_once("connection.php");
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Escape user input to prevent SQL injection (basic, not recommended for production)
    $firstName = mysqli_real_escape_string($conn, $firstName);
    $lastName = mysqli_real_escape_string($conn, $lastName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);


    // $sql = "UPDATE zoo_event1 SET Event_Name = '$eventName', Date = '$date', Time = '$time', Description = '$description' WHERE id = $id";
    $sql = "INSERT INTO register (firstName, lastName ,email,password) VALUES ('$firstName','$lastName', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "registration successfully";
       header('location: index.html');

    } else {
        echo "Error added event: " . $conn->error;
    }
}

$conn->close();
?>

<?php
    include("php/index.php"); // Ensure this file establishes the $conn variable

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($firstName)) {
            echo "Please enter a first name.";
        } elseif (empty($lastName)) {
            echo "Please enter a last name.";
        } elseif (empty($email)) {
            echo "Please enter an email address.";
        } elseif (empty($password)) {
            echo "Please enter a password.";
        } else {
            // Check if $conn is a valid connection
            var_dump($conn); // Debugging line to check the state of the connection

            if (!$conn) {
                echo "Database connection failed.";
                exit();
            }

            // Use a prepared statement to avoid SQL injection
            $stmt = $conn->prepare("INSERT INTO register (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

            try {
                $stmt->execute();
                echo "You are registered.";
                header('Location: index.html');
                exit();
            } catch (mysqli_sql_exception $e) {
                echo "That username is taken.";
            } finally {
                $stmt->close();
                $conn->close();
            }
        }
    }
?>

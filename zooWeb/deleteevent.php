<?php
if (isset($_GET['id'])) {
		include 'connection.php';	
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM `detailedevents` WHERE ID=$id");
    echo"successful delete!";
    header('location: adminpanel.php');

}
?>

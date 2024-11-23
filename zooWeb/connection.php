<?php
    $db_server = "localhost";
    $db_user ="root";
    $db_pass = "";
    $db_name ="zooparc_zoo";
    $conn = "";

    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    if($conn){
        // echo"You Are Connceted";
    }else{
        echo"could not connect";
    }

?>
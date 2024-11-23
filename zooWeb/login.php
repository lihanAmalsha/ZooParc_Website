<?php
    session_start();
    ?>
<?php   require_once('connection.php');
?>
<?php
    if (isset($_POST['submit'])){
        $errors = array();


        if(!isset($_POST['email'])){
            $errors[] = 'Email is missing';
        }
        if(!isset($_POST['password'])){
            $errors[] = 'password is missing';
        }

        if(empty($errors)){
            $Email = ($_POST['email']);
            $Password = ($_POST['password']);

            $query = "SELECT email, password FROM  register WHERE email = '{$Email}' AND password = '{$Password}' LIMIT 1";

            $result_set = mysqli_query ($conn , $query);

            if ($result_set){

                if(mysqli_num_rows($result_set) == 1){
                    echo"login successful";
                    header('location: memberEvents.php');
                }else{
                    $errors[] = 'invalid';
                }
            }
        }else{
            $errors[] = 'database query faild';
        }
    }
?>
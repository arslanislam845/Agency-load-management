<?php

include 'db-connection.php';


$admin_email = $_POST['email'];
$admin_password = $_POST['password'];

if(isset($_POST['admin_login_btn'])){
        $select = "SELECT * FROM `newload`.`admin` WHERE email = '$admin_email'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        if($row){
            if($row['password']===$admin_password){
                echo $row['name'];
                $_SESSION['adminName'] = $row['name'];
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['adminEmail'] = $row['email'];
                $_SESSION['admin_logged_in'] = true;

                header("location:http://localhost/FirstPhp/pepsi/factoryindex.php");
            }else{
                echo "<script>alert('Password does not match...try again!!'); window.location='../../FirstPhp/pepsi/index.php';</script>";

            }
                  
        }else{
            echo "<script>alert('Admin does not exist...try again!!'); window.location='../../FirstPhp/pepsi/index.php';</script>";
        }
}

?>
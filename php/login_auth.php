<?php

// use function PHPSTORM_META\type;

require  "connect.php";

session_start();


//get login data
$email = $_GET['email'];

$password = $_GET['password'];

// $email = "hardik@gmail.com";


$query ="SELECT * FROM user_details WHERE email = '$email' AND password = '$password' ";
$data = pg_query($connect,$query);
$check = pg_num_rows($data);
$row = pg_fetch_assoc($data);
// echo $row['bit'];
$id = $row['id']??= 'default value';

if($check > 0){
    // echo '<script>alert("user login successfully")</script>';
    // header("Location: http://localhost/php/admin_panel/index.php");
    // echo "success fuly";
    if($row['bit']=='t'){
        $_SESSION['bit']=$row['bit'];
        $_SESSION['id']=$id;
        header("Location: http://localhost/php/admin_panel/index.php");
        $_SESSION['msg']="admin login successfully";
    }
    else{
        // echo "User";
        if($row['status']=='active'){
            $_SESSION['id']=$id;
            header("Location: http://localhost/php/first.php");
            $_SESSION['msg']="User login successfully";
        }
        else{
            // echo "Inactive";
            // echo '<script>alert("user Not Active")</script>';

            header("Location: http://localhost/php/login.php");
            $_SESSION['msg']="User not active";

            // echo "Inactive";
        }
    }
}
else{
    // echo '<script>alert("Invalid User-Login")</script>';
    // echo "Error";
    header("Location: http://localhost/php/login.php");
    $_SESSION['msg']="Invalid Email or Password";
}

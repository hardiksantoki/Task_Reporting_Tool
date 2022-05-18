<?php
require  "connect.php";
session_start();
//get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//check email id is already exist or not...

$checkemail = "SELECT email FROM user_details WHERE email='$email' ";
$checkemail_run = pg_query($connect,$checkemail);

if(pg_num_rows($checkemail_run) > 0)
{
    echo "email id is already taken";
    header("Location: http://localhost/php/register.php");
    $_SESSION['msg']="Email already Registered";
}
else{
    $query = pg_query($connect,"INSERT INTO user_details (name,email,password,status,assign) VALUES('$name','$email','$password','deactive','not assign')");
    if($query){
    
        header("Location: http://localhost/php/login.php");
        $_SESSION['msgr']="User Registered successfully";
    }
    else{
        echo "error in data insert";
    }
}



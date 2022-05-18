<?php
require  "connect.php";

//get form data
$id = $_GET['id'];
$title = $_GET['title'];
// $password = $_POST['password'];

$result = pg_query($connect,"UPDATE user_details SET assign='$title' WHERE id = $id ");

if($result){
    header("Location: http://localhost/php/admin_panel/table.php");
    
}

<?php
require  "connect.php";
session_start();
//get form data
$title = $_POST['title'];
$s_date = $_POST['start_date'];
$e_date = $_POST['end_date'];
$p_details = $_POST['p_details'];
$obje = $_POST['objective'];
$tech = $_POST['technology'];

$query = pg_query($connect,"INSERT INTO project (title,start_date,end_date,detail,objective,technology) VALUES('$title','$s_date','$e_date','$p_details','$obje','$tech')");
if($query){

    header("Location: http://localhost/php/admin_panel/project.php");
    $_SESSION['msg']="Project Add Successfully";
}
else{
    echo "error in data insert";
}
<?php
require  "connect.php";
session_start();
//get form data
$title = $_POST['utitle'];
$s_date = $_POST['ustart_date'];
$e_date = $_POST['uend_date'];
$p_details = $_POST['up_details'];
$obje = $_POST['uobjective'];
$tech = $_POST['utechnology'];
$id = $_GET['id'];

$query = pg_query($connect,"UPDATE project SET title='$title' ,start_date='$s_date',  end_date='$e_date',  detail='$p_details', objective='$obje', technology='$tech',update_date=CURRENT_DATE WHERE p_id=$id") ;
if($query){

    header("Location: http://localhost/php/admin_panel/project.php");
    $_SESSION['msg']="Update Successfully";
}
else{
    echo "error in data insert";
}
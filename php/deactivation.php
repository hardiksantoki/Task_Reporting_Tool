<?php
require  "connect.php";

session_start();
// $conn_string = "host=localhost port=5432 dbname=php user=postgres password=hardik@007";
// $connect = pg_connect($conn_string);


// if (!$connect) {
//     die("ERROR: Could not connect. ");
// } 
// else{
    // echo $_GET['id'];
    $id = $_GET['id'];

    
    //update status
    $result = pg_query($connect,"UPDATE user_details SET status='deactive' WHERE id = $id ");
    
    
    if($result){
        header("Location: http://localhost/php/admin_panel/table.php");
    }
// }
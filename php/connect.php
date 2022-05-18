<?php

$conn_string = "host=localhost port=5432 dbname=php user=postgres password=hardik@007";
$connect = pg_connect($conn_string);

if (!$connect) {
    die("ERROR: Could not connect. ");
} 



// $result = pg_query($dbconnection, 'SELECT * FROM user_details');

// while ($row = pg_fetch_assoc($result)) {
//     echo $row['id'];
//     echo $row['name'];
//     echo $row['email'];
//     echo $row['password'];
// }

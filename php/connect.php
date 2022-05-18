<?php

$conn_string = "host=localhost port=2121 dbname=php user=postgres password=1234";
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

<?php

global $conn;
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn , "SELECT * from users where not unique_id = '{$outgoing_id}'");

$output = "";
if (mysqli_num_rows($sql) == 0 ){
    $output .= "no available users";
}elseif (mysqli_num_rows($sql) > 0){

    include "data_users.php";

}

echo $output;
?>
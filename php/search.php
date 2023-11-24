<?php
global $conn;
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn , $_POST['searchTerm']);

$output = "";
$sql = mysqli_query($conn , "SELECT * from users where (fname LIKE '%{$searchTerm}%' or lname like '%{$searchTerm}%') AND not unique_id = '{$outgoing_id}'");
if (mysqli_num_rows($sql) > 0 ) {
    include "data_users.php";

}
echo $output;
?>
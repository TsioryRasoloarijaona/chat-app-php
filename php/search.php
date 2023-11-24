<?php
global $conn;
include_once "config.php";

$searchTerm = mysqli_real_escape_string($conn , $_POST['searchTerm']);

$output = "";
$sql = mysqli_query($conn , "SELECT * from users where fname LIKE '%{$searchTerm}%' or lname like '%{$searchTerm}%'");
if (mysqli_num_rows($sql) > 0 ) {
    include "data_users.php";

}
echo $output;
?>
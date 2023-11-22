<?php
global $conn;
include_once "config.php";

$searchTerm = mysqli_real_escape_string($conn , $_POST['searchTerm']);

$output = "";
$sql = mysqli_query($conn , "SELECT * from users where fname LIKE '%{$searchTerm}%' or lname like '%{$searchTerm}%'");
if (mysqli_num_rows($sql) > 0 ){
    while ($row = mysqli_fetch_assoc($sql))
    $output .= '<a href="">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .' " alt="">
                    <div class="details">
                    <span>'.$row['fname']. " " .$row['lname'].'</span>
                    <p>this is a teest message</p>
                    </div>
                
                    </div>
                    <div class="status-dot">
                    <i class="fa-solid fa-circle"></i>
                    </div>
                    </a>';;
}else{
    $output .= "no user related to your search ";
}

echo $output;

?>
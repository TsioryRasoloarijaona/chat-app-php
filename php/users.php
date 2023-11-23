<?php

global $conn;
session_start();
include_once "config.php";

$sql = mysqli_query($conn , "SELECT * from users");
$output = "";
if (mysqli_num_rows($sql) == 1 ){
    $output .= "no available users";
}elseif (mysqli_num_rows($sql) > 0){
    while ($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="message.php?user_id='.$row['unique_id'].'">
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
                    </a>';
    }

}

echo $output;
?>
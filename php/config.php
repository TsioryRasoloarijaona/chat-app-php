<?php
 $conn =  mysqli_connect("localhost",
 "root",
 "",
 "chat");

if(!$conn){
    echo "error";
}else {
    echo mysqli_connect_error();
}





?>
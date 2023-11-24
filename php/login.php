<?php
global $conn;
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn , $_POST ['email']);
$password = mysqli_real_escape_string($conn , $_POST ['password']);
//echo "hello from login php"

if (!empty($email) && !empty($password)){
    $sql = mysqli_query($conn , "SELECT * from users WHERE email = '{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0 ){
        $row = mysqli_fetch_assoc($sql);
        $status = "online now";
        $sql2 = mysqli_query($conn, "Update users set status = '{$status}' where unique_id = '{$row['unique_id']}'");
        if ($sql2){
            $_SESSION['unique_id'] = $row ['unique_id'];
            echo "succes";
        }

    }else{
        echo "Email or password is incorrect ";
    }

}else{
    echo "All input field are required";
}

?>
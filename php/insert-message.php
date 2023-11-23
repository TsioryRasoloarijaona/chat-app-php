<?php
//echo "insert it"
global $conn;
session_start();
if (isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $msg = mysqli_real_escape_string($conn, $_POST['messages']);
    if (!empty($msg)) {

        $query = mysqli_query($conn,"insert into messages (incoming_id , outcoming_id , msg) values('{$incoming_id}' ,'{$outgoing_id}','{$msg}' )") or die();
    }
}else{
    header("../login.php");
}

?>









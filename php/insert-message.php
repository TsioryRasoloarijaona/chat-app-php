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

        $query = mysqli_query($conn,"insert into messages (incoming_id , outcoming_id , msg) values
                                                            ('{$incoming_id}' ,'{$outgoing_id}','{$msg}' )") or die();
    }elseif (empty($msg) && isset($_FILES['files'])){
        $img_name = $_FILES['files']['name'];
        $img_type = $_FILES['files']['type'];
        $tmp_name = $_FILES['files']['tmp_name'];

        $img_explode = explode('.' , $img_name);
        $img_ext = end($img_explode);

        $extensions = ['png' , 'jpeg' , 'jpg' ];
        if (in_array($img_ext , $extensions) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            if(move_uploaded_file($tmp_name , "send_img/".$new_img_name)){
                $sql = "insert into messages (incoming_id , outcoming_id , files) values
                                                            ('{$incoming_id}' ,'{$outgoing_id}','{$new_img_name}' )";
                $query2 = mysqli_query($conn , $sql) or die();
            }
        }
    }

}else{
    header("../login.php");
}

?>









<?php

global $conn;
session_start();
if (isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";
    $sql = "select * from messages LEFT JOIN users on users.unique_id = messages.incoming_id where (outcoming_id = {$outgoing_id}
    AND incoming_id = {$incoming_id}) OR (outcoming_id = {$incoming_id} AND incoming_id = {$outgoing_id})
    ORDER BY msg_id ASC";

    $query = mysqli_query($conn , $sql);
    if (mysqli_num_rows($query) > 0){
        while ($row = mysqli_fetch_assoc($query)){
           $time = $row['send_time'];
          $legth = substr($time,0,16);
            if ($row['outcoming_id'] === $outgoing_id){
                $output .= '<p style="font-size: 12px; text-align: center">'.$legth.'</p>
                            <div class="chat outgoing">
                            <div class="details">
                            <p>'.$row['msg'].'</p>
                            </div>
                            </div>';



            }else{
                $output .= '<p style="font-size: 12px; text-align: center">'.$legth.'</p>
                            <div class="chat incoming">
                            <img src="php/images/'.$row['img'].'">
                            <div class="details">
                            <p>'.$row['msg'].'</p>
                            </div>
                            </div>';

            }
        }
    }

   echo $output;

}else{
    header("../login.php");
}

?>










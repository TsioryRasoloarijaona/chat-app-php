<?php
global $conn, $sql, $outgoing_id;
while ($row = mysqli_fetch_assoc($sql)){
    $sql1 = mysqli_query($conn , "select * from messages where (outcoming_id = '{$row['unique_id']}' OR incoming_id =  '{$row['unique_id']}') AND 
                             (outcoming_id = '{$outgoing_id}' OR incoming_id = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1");
    $row1 = mysqli_fetch_assoc($sql1);
    if (mysqli_num_rows($sql1) > 0){
        $result = $row1['msg'];
    }else{
        $result = "no available msg";
    }



    (strlen($result) > 28 ) ? $msg = substr($result , 0 , 28). ' ...' : $msg = $result ;

    $offline = null;
    if ($row['status'] == "offline now"){
        $status = "#ccc";
    }else{
        $status = "green";
    }


    if (strlen($msg) > 0){
        $output .= '<a href="message.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .' " alt="">
                    <div class="details">
                    <span>'.$row['fname']. " " .$row['lname'].'</span>
                    <p>'.$msg.'</p>
                    </div>
                
                    </div>
                    <div class="status-dot "  style = "color : '.$status.';font-size: 12px" >
                    <i class="fa-solid fa-circle"></i>
                    </div>
                    </a>';
    }else{
        $output .= '<a href="message.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .' " alt="">
                    <div class="details">
                    <span>'.$row['fname']. " " .$row['lname'].'</span>
                    <p>image</p>
                    </div>
                
                    </div>
                    <div class="status-dot "  style = "color : '.$status.' ;font-size: 12px">
                    <i class="fa-solid fa-circle"></i>
                    </div>
                    </a>';
    }


}
?>
<?php
global $conn;
session_start();
if (!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
?>


<?php
include_once "header.php"
?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <?php
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn , $_GET['user_id']);
            $sql = mysqli_query($conn , "select * from users where unique_id = '{$_SESSION['unique_id']}'" );
            if (mysqli_num_rows($sql) > 0 ){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
          <header>
                <a href="users.php" class="back-icon"><i class="fa-solid fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " ". $row['lname']?></span>
                    <p><?php echo $row['status']?></p>
                </div>
           
           
          </header>

          <div class="chat-box">

          </div>

          <form action="" class="typing-area" autocomplete="off">
            <input type="text" name="messages" class="input-field" id="" placeholder="type a message here ...">
            <input value="<?php echo $user_id ?>" name="outgoing_id" hidden>
              <input value="<?php echo $_SESSION['unique_id']?>" name="incoming_id" hidden>

              <button><i class="fa-solid fa-paper-plane"></i></button>
          </form>
         
        </section>
    </div>
</body>

<script src="javascript/message.js"></script>

</html>
                    
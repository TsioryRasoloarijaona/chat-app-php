<?php
global $conn;
session_start();
if (!isset($_SESSION['unique_id'])){
    header("location: login.php");
}

?>

<?php include_once "header.php"?>

<body>
    <div class="wrapper">
        <section class="users">
          <header>
          <?php
          include_once "php/config.php";
          $sql = mysqli_query($conn , "select * from users where unique_id = {$_SESSION['unique_id']}" );
          if (mysqli_num_rows($sql) > 0 ){
              $row = mysqli_fetch_assoc($sql);
          }
          ?>

            <div class="content">
                <img src="php/images/<?php echo $row['img']?>">
                <div class="details">
                    <span><?php echo $row['fname'] . " ". $row['lname']?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">logout</a>
          </header>
          <div class="search">
            <span class="text">select an user to start chat</span>
            <input type="text" placeholder="enter name to start chat...." name="searchTerm">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>

          </div>
          <div class="users-list">


          </div>
        </section>
    </div>
</body>

<script src="javascript/users.js"></script>


</html>
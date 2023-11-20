<?php
include_once "header.php"
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>real time chat app</header>
            <form action="#">
                <div class="error-txt">

                </div>
              
                <div class="field input">
                    <label for="" >email address</label>
                    <input type="text" name="email" placeholder="enter your email">
                </div>
                <div class="field input">
                    <label for="">password</label>
                    <input type="password" name="password" placeholder="enter your password">
                </div>
             
                <div class="field button">
                    <input type="submit" value="continue to chat">
                </div>

            </form>
            <div class="link">not yet signup ? <a href="#">sign up now</a></div>
        </section>
    </div>
</body>
<script src="javascript/login.js"></script>

</html>
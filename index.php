<?php
include_once "header.php"
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat app </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">
                    this is an error text
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">first name</label>
                        <input type="text" name="fname" placeholder="first name">
                    </div>
                    <div class="field input">
                        <label for="">last name</label>
                        <input type="text" name="lname" placeholder="last name" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">email address</label>
                    <input type="text" name="email" placeholder="email address" required>
                </div>
                <div class="field input">
                    <label for="">password</label>
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <div class="field image">
                    <label for="">select image</label>
                    <input type="file" name="image" required>

                </div>
                <div class="field button">
                    <input type="submit" value="continue to chat">
                </div>

            </form>
            <div class="link">already signup ? <a href= "login.php">login now</a></div>
        </section>
        <div class="footer"><a href="https://tsiory-tf50.onrender.com">directed by @TsioryRasoloarijaona</a></div>
    </div>

</body>
<script src="javascript/signup.js"></script>

</html>
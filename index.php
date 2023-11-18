<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Barlow&family=Be+Vietnam+Pro:wght@200&family=Courgette&family=Dancing+Script&family=Edu+NSW+ACT+Foundation:wght@600&family=Genos&family=Gochi+Hand&family=Handlee&family=Josefin+Sans:wght@300&family=Jost:wght@100;400&family=Lobster&family=Lugrasimo&family=Merriweather+Sans:wght@300&family=Montserrat+Alternates&family=Open+Sans:wght@300;400&family=Orbitron&family=Quicksand&family=Righteous&family=Tajawal&family=Titillium+Web&family=Urbanist&family=Work+Sans&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>real time chat app</header>
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
            <div class="link">already signup ? <a href="#">login now</a></div>
        </section>
    </div>
</body>
<script src="javascript/signup.js"></script>

</html>
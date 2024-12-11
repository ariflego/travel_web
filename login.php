<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--styling for background image-->

    <style>
        body {
            background-image: url('assets/images/bg_website/login.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>
<body>
    <?php
        include("assets/includes/header.html");
    ?>

    <main>
        <div class="sec_upper">
            <section id="sec_upper">
                <h1>Log In</h1>
            </section>
        </div>
        
        <div class="sec_login1">
            <section id="sec_login1">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <input type="text" name="username" placeholder="Username:" required id="input"> <br>
                    <input type="password" name="password" placeholder="Password:" required id="input"> <br>
                    <input type="submit" name="submit" value="Submit" id="submit">
                </form>
            </section>
        </div>
        
    </main>
    
    <?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>
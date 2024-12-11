<?php
    session_start();
    include("assets/includes/database.php");
?>

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
            background-image: url('assets/images/bg_website/explore.png');
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
                <h1>Welcome, User!</h1>
                <p id="p1">WHERE DO YOU WANT TO TRAVEL TODAY?</p>
                <p id="p2">TRY OUR SURVEY TO FIND OUT</p> <br>
                <div><a href="#index-survey">Click here!</a></div>
            </section>
        </div>
        
        <div class="sec_index1">
            <section id="sec_index1">
                <h3>Introduction</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem beatae vero nisi modi odit! Eos at dignissimos facere asperiores velit assumenda voluptatem ut, dolorum molestiae aspernatur soluta veniam similique odio.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officia neque esse repellat ipsum mollitia. Mollitia saepe adipisci, ab quasi magni ad similique omnis, eos ex, commodi cumque accusamus dolor.</p>
            </section>
        </div>
        
    </main>
    
    <?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>

<?php

    mysqli_close($conn);
?>
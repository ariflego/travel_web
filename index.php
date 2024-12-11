<?php
    session_start();
    include("assets/includes/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--styling for background image-->

    <style>
        body {
            background-image: url('assets/images/bg_website/index.png');
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
                <div id="index-sec1-cont">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem beatae vero nisi modi odit! Eos at dignissimos facere asperiores velit assumenda voluptatem ut, dolorum molestiae aspernatur soluta veniam similique odio.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officia neque esse repellat ipsum mollitia. Mollitia saepe adipisci, ab quasi magni ad similique omnis, eos ex, commodi cumque accusamus dolor.</p>
                </div>
            </section>
        </div>
        
        <section class="sec_index2">
            <h3>Survey</h3>
            <div id="index-survey">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <label>What type of places do you like to explore?</label> <br>
                    <input type="radio" name="q1" value="Nature"> Nature (e.g., beaches, waterfalls, mountains) <br>
                    <input type="radio" name="q1" value="Cultural heritage"> Cultural heritage (e.g., museums, historical sites) <br>
                    <input type="radio" name="q1" value="Food spots"> Food spots (e.g., street food, restaurants, cafes) <br>
                    <input type="radio" name="q1" value="Entertainment"> Entertainment (e.g., theme parks, nightlife, shopping malls) <br><br>

                    <label>What is your budget range for exploring places?</label> <br>
                    <input type="radio" name="q2" value="Free - RM99"> Free - RM99 <br>
                    <input type="radio" name="q2" value="RM100 - RM299"> RM100 - RM299 <br>
                    <input type="radio" name="q2" value="RM300+"> RM300+ <br><br>

                    <input type="submit" name="confirm" value="Submit your answers!" id="submit">
                </form>
            </div>
        </section>
    </main>

    <?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>

<?php

    mysqli_close($conn);
?>
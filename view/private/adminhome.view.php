
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include ("../view/cdn/cssBS.php"); ?>
        <link rel="stylesheet" href="css/colours.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body class="text-center">
        <p class="h1">HI BOSS</p>
        <form method="POST" class="d-flex flex-row">
    <button class="btn langButton langEN" value="en" type="submit" name="user_lang" id="englishButton"></button>
    <button class="btn langButton langFR" value="fr" type="submit" name="user_lang" id="frenchButton"></button>
</form>

        <?php include ("inc/error-message.php"); // leave this here to display any eventual error message - include this on all pages ?>
<?php

?>

<div class="container">
    <ul class="list-group d-flex flex-row justify-content-around">
        <a href="?addSelector">
            <li class="list-group-item" id="navAddSelect"></li>
        </a>
        <a href="?updateSelector">
            <li class="list-group-item" id="navUpdSelect"></li>
        </a>
        <a href="?addText">
            <li class="list-group-item" id="navAddTxt"></li>
        </a>
        <a href="?updateText">
            <li class="list-group-item" id="navUpdText"></li>
        </a>
    </ul>
    </div>


    <?php include ("inc/include-controller.php"); ?>

    <?php include ("inc/footer.private.php"); ?>
    <?php require_once("../view/cdn/jsBS.php") ?>
    <script src="js/script.js"></script>
    </html>
    
    
    
    
    
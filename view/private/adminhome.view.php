
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include ("../view/cdn/cssBS.php"); ?>
        <link rel="stylesheet" href="css/colours.css">
        <link rel="stylesheet" href="css/style.css">
        <title><?=$title?></title>
    </head>
    <body class="text-center">
        <p class="h1" id="adminHomeWelcomeMessage"></p>
        <form method="POST" class="d-flex flex-row">
    <button class="btn langButton langEN" value="en" type="submit" name="user_lang" id="englishButton"></button>
    <button class="btn langButton langFR" value="fr" type="submit" name="user_lang" id="frenchButton"></button>
</form>

    
<?php

?>

<div class="container">
    <ul class="list-group d-flex flex-row justify-content-around">
        <a href="?addSelector">
            <li class="list-group-item adminHomeNavLink" id="navLinkUpdateSelector"></li>
        </a>
        <a href="?addText">
            <li class="list-group-item adminHomeNavLink" id="navLinkAddTxt"></li>
        </a>
        <a href="?updateText">
            <li class="list-group-item adminHomeNavLink" id="navLinkUpdText"></li>
        </a>
        <a href="?logout">
            <li class="list-group-item adminHomeNavLink" id="navLinkLogout"></li>
        </a>
    </ul>
    </div>
            <p id="showOff"></p>
    <?php include ("inc/error-message.php"); // leave this here to display any eventual error message - include this on all pages ?>

    <?php include ("inc/include-controller.php"); ?>

    <?php include ("inc/footer.private.php"); ?>
    <?php require_once("../view/cdn/jsBS.php") ?>
    <script src="js/script.js"></script>
    </html>
    
    
    
    
    
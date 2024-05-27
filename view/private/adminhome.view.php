
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
        <?php include ("inc/error-message.php"); // leave this here to display any eventual error message - include this on all pages ?>

    <ul class="list-group">
        <?php
if (is_array($cssSelectors)) {
    foreach ($cssSelectors as $css) {
        ?>
            <li class="list-group-item"><?=$css['selector']?></li>
        <?php
    }
}

// MAKE THINGS PRETTY
?>
    </ul>

    <ul class="list-group">
        <a href="?addSelector">
            <li class="list-group-item">Add Selectors</li>
        </a>
        <a href="?updateSelector">
            <li class="list-group-item">Update Selectors</li>
        </a>
        <a href="?addText">
            <li class="list-group-item">Add Text</li>
        </a>
        <a href="?updateText">
            <li class="list-group-item">Update Text</li>
        </a>
    </ul>
    
    <?php include ("inc/include-controller.php"); ?>

    <?php include ("inc/footer.private.php"); ?>
    <?php require_once("../view/cdn/jsBS.php") ?>
    <script src="js/script.js"></script>
    </html>
    
    
    
    
    
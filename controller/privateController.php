<?php



if (isset($_GET["logout"])) {
    include_once("../model/connectionModels/logoutModel.php"); 
    die();   
}

    // Appel du page d'accueil Admin
    $title = '???homeAdmin???';
    $cssSelectors = getAllCssSelectors($db);

    if (is_string($cssSelectors)) {
        $errorMessage = "No entries yet";
    }

if (isset($_POST["addSelectorName"])) {
    $selector = standardClean($_POST["addSelectorName"]);

    $addNewSelector = addNewSelectorToDB($db, $selector);
    if (is_string($addNewSelector)) {
        $errorMessage = $addNewSelector;
    }
}

    include "../view/private/adminhome.view.php";
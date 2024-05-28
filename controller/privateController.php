<?php


$cssSelectors = getAllCssSelectors($db);
if (isset($_POST["user_lang"])) {
    $_SESSION["np_user_lang"] = $_POST["user_lang"];
}
$allText = getTextByUserLang($db, $_SESSION["np_user_lang"]);


if (isset($_GET["logout"])) {
    include_once("../model/connectionModels/logoutModel.php"); 
    die();   
}


    if (is_string($cssSelectors)) {
        $errorMessage = "No entries yet";
    }


// ADD SELECTOR    
if (isset($_POST["addSelectorName"])) {
    $selector = standardClean($_POST["addSelectorName"]);

    $addNewSelector = addNewSelectorToDB($db, $selector);
    if (is_string($addNewSelector)) {
        $errorMessage = $addNewSelector;
    }
}


// GET SELECTOR FOR UPDATE 
if (isset($_GET["updateCss"],
          $_GET["id"]) && 
          ctype_digit($_GET["id"])
          ) {
            $selector       = intClean($_GET["id"]);
            $getSelector    = getSelectorForUpdate($db, $selector);
          }

          
// ADD TEXT
if (isset(
    $_POST["selectInp"],
    $_POST["englishInp"],
    $_POST["frenchInp"],
    $_POST["typeInp"]
    )
){
$selector = standardClean($_POST["selectInp"]);
$english  = standardClean($_POST["englishInp"]);
$french   = standardClean($_POST["frenchInp"]);
$type     = standardClean($_POST["typeInp"]);

$addNewText = addNewText($db, $selector, $english, $french, $type);
if (is_string($addNewText)) {
    $errorMessage = $addNewText;
}
    }

    // Appel du page d'accueil Admin
    $title = '???homeAdmin???';
    include "../view/private/adminhome.view.php";
<?php


$cssSelectors = getAllCssSelectors($db);
if (is_string($cssSelectors)) {
    $errorMessage = "No entries yet";
}

if (isset($_POST["user_lang"])) {
    $_SESSION["np_user_lang"] = $_POST["user_lang"];
}
$allText = getTextByUserLang($db, $_SESSION["np_user_lang"]);
$completeTexts = getAllTexts($db);


if (isset($_GET["logout"])) {
    include_once("../model/connectionModels/logoutModel.php"); 
    die();   
}





// ADD SELECTOR    
if (isset($_POST["addSelectorName"],
          $_POST["selectorType"])) {
    $selector = standardClean($_POST["addSelectorName"]);
    $type = standardClean($_POST["selectorType"]);
    $addNewSelector = addNewSelectorToDB($db, $selector, $type);
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

// ADD SELECTOR
if (isset($_POST["addCssSelector"],
          $_POST["addCssAttrib"],
          $_POST["addCssValue"]
        ) && ctype_digit($_POST["addCssSelector"])
    ) {
        $selector = intval(intClean($_POST["addCssSelector"]));
        $attrib   = standardClean($_POST["addCssAttrib"]);
        $newVal   = standardClean($_POST["addCssValue"]);

        $addAttrib = addAttribToSelector($db, $selector, $attrib, $newVal);
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

// GET TEXT FOR UPDATE
if (isset($_GET["item"]) &&
          ctype_digit($_GET["item"])) {
    $id = intval(intClean($_GET["item"]));
$getOneText = getOneTextForUpdate($db, $id);
                }


// UPDATE ONE TEXT
if (isset($_POST["oneTextId"],
          $_POST["oneTextElem"],
          $_POST["oneTextEng"],
          $_POST["oneTextFre"],
          $_POST["selectorType"]
        ) &&
        ctype_digit($_POST["oneTextId"])) {
            $id     = intval(intClean($_POST["oneTextId"]));
            $elem   = standardClean($_POST["oneTextElem"]);
            $eng    = standardClean($_POST["oneTextEng"]);
            $fre    = standardClean($_POST["oneTextFre"]);
            $type   = standardClean($_POST["selectorType"]);

    $updateText = updateOneText($db, $id, $elem, $eng, $fre, $type);
    if (is_string($updateText)) {
        $errorMessage = $updateText;
    }
        }

    // Appel du page d'accueil Admin
    $title = '???homeAdmin???';
    include "../view/private/adminhome.view.php";
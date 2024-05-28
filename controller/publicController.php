<?php

if (isset($_POST["user_lang"])) {
    $_SESSION["np_user_lang"] = $_POST["user_lang"];
}
$allText = getTextByUserLang($db, $_SESSION["np_user_lang"]);



// LOGIN CALL
if (isset($_POST["userName"], 
          $_POST["userPwd"])) 
          {
              $name = standardClean($_POST["userName"]);
              $pwd  = simpleTrim($_POST["userPwd"]);
              
              $loginAttempt = attemptUserLogin ($db, $name, $pwd);
              if ($loginAttempt === true) {
                  header("Location: ./");
                  die();
                }else if ($loginAttempt === false) {
                    $title = "Incorrect Login";
                    $myMessage = 'That be bad';
                    include "../view/public/pubhome.view.php";
                    die();
                }else {
                    $title = '???HomePublic???';
                    include "../view/public/pubhome.view.php";
                    die();
                }
            }

    // Appel du page d'accueil public
    $title = '???HomePublic???';
    include "../view/public/pubhome.view.php";
    die ();
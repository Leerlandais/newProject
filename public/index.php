<?php
session_start();    
if(!isset($_SESSION["np_user_lang"])) $_SESSION["np_user_lang"] = "en"; 


require_once("../config.php");
require_once("../controller/dbConnectController.php");
require_once("../model/protectionModels/laundryModel.php");
require_once("../model/connectionModels/loginModel.php");
require_once("../model/cssModels/getCssModel.php");
require_once("../model/cssModels/addCssSelectorsModel.php");
require_once("../model/cssModels/updateCssModel.php");
require_once("../model/textModels/getTextModel.php");
require_once("../model/textModels/addTextModel.php");
require_once("../controller/jsonController.php");


if (isset($_SESSION["id"]) && ($_SESSION["id"]) === session_id()) {
    require_once('../controller/privateController.php');
}else {
    require_once("../controller/publicController.php");
}

$db = null;
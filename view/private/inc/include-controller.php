<?php

if (isset($_GET["addSelector"])) {
    include_once("add-css-selector-form.php");
}else if (isset($_GET["addText"])) {
    include_once("add-text-form.php");
}else if (isset($_GET["updateCss"])) {
    include_once("update-css-selector-form.php");
}else if (isset($_GET["item"]) &&
                ctype_digit($_GET["item"])) {
    include_once("update-one-text.php");
}else if (isset($_GET["updateText"])) {
    include_once("update-text-table.php");
}
/*
else if (isset($_GET[""])) {
    include_once("");
}

else if (isset($_GET[""])) {
    include_once("");
}

*/

?>
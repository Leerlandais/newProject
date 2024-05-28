<?php


if (isset($_GET['json'])) {
    $datas = getTextByUserLang($db, $_SESSION["np_user_lang"]);
    if (!is_string($datas)) {
        echo json_encode($datas);
    }
    exit();
}



if (isset($_GET['jsonCSS'])) {
    $datasCSS = getAllCssSelectors($db);
    if (!is_string($datasCSS)) {
        echo json_encode($datasCSS);
    }
    exit();
}
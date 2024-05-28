<?php


function getTextByUserLang(PDO $db, string $userLang) : array | string {

    $userLang === "en" ? 
        $lang = "np_text_en" :
        $lang = "np_text_fr";
    
        $sql = "SELECT `np_text_element` AS `elem`, $lang AS `theText`, `np_text_type` AS theType  
                FROM `np_text`";
    
    try{
    $query = $db->query($sql);
    if ($query->rowCount() === 0) {
    $errorMessage = "Something went wrong getting site text";
    return $errorMessage; 
    }else {
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
    } 
    
    }catch(Exception $e) {
    return $e->getMessage();
    }
    
    }
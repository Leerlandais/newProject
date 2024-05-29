<?php


function getTextByUserLang(PDO $db, string $userLang) : array | string {

    $userLang === "en" ? 
        $lang = "np_text_en" :
        $lang = "np_text_fr";
    
        $sql = "SELECT `np_text_element` AS `elem`, 
                $lang AS `theText`, 
                `np_text_type` AS theType  
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

    function getAllTexts(PDO $db) : array | bool | string {
        $sql = "SELECT `np_text_element` AS `elem`, 
                        `np_text_en` AS `enText`, 
                        `np_text_fr` AS `frText`,
                        `np_text_type` AS theType,
                        `np_text_id` AS `id`  
                FROM `np_text`";
        try {
            $query = $db->query($sql);
            if ($query->rowCount() === 0) {
                $errorMessage = "There is no text yet";
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

    function getOneTextForUpdate(PDO $db,int $id) : array | string {
        $sql = "SELECT `np_text_element` AS `elem`, 
                       `np_text_en` AS `enText`, 
                       `np_text_fr` AS `frText`,
                       `np_text_type` AS theType,
                       `np_text_id` AS `id`  
                FROM `np_text`
                WHERE `np_text_id` = ?";
        $stmt = $db->prepare($sql);

        try{
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }catch(Exception $e) {
            return $e->getMessage();
        }
    }
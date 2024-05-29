<?php

function addNewText(PDO $db, string $selector, string $english, string $french, string $type) : bool | string {
    $sql = "INSERT INTO `np_text`(
                        `np_text_element`, 
                        `np_text_en`, 
                        `np_text_fr`, 
                        `np_text_type`
                        ) 
            VALUES (?,?,?,?)";

$stmt = $db->prepare($sql);
$stmt->bindValue(1, $selector);
$stmt->bindValue(2, $english);
$stmt->bindValue(3, $french);
$stmt->bindValue(4, $type);

try{
$stmt->execute();
return true;

}catch(Exception){
$errorMessage = "Couldn't add that";
return $errorMessage;
}
}


function updateOneText(PDO $db, int $id, string $elem, string $eng, string $fre, string $type) : bool | string {
    $sql = "UPDATE `np_text` 
            SET `np_text_element`= ?,
                `np_text_en`= ?,
                `np_text_fr`= ?,
                `np_text_type`= ?
                 WHERE `np_text_id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $elem);
    $stmt->bindValue(2, $eng);
    $stmt->bindValue(3, $fre);
    $stmt->bindValue(4, $type);
    $stmt->bindValue(5, $id);
    
try{
    $stmt->execute();
    return true;
    
    }catch(Exception){
    $errorMessage = "Couldn't update that";
    return $errorMessage;
    }
    return true;
}
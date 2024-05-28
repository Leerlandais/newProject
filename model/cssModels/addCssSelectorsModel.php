<?php

function addNewSelectorToDB(PDO $db, string $selector) : bool | string {
    $sql = "INSERT INTO `np_css_selector`
                        (`np_css_selector_name`) 
            VALUES (:selector)";

try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':selector', $selector);
        $stmt->execute();
        if ($stmt->rowCount() === 0) return "Couldn't insert that";
        return true;
    }catch (Exception $e) {
        return $e->getMessage();
    }
}
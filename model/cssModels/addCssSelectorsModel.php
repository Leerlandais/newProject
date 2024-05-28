<?php

function addNewSelectorToDB(PDO $db, string $selector, $type) : bool | string {
    $sql = "INSERT INTO `np_css_selector`
                        (`np_css_selector_name`,
                         `np_css_selector_type`) 
            VALUES (:selector, :selType)";

try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':selector', $selector);
        $stmt->bindParam(':selType', $type);
        $stmt->execute();
        if ($stmt->rowCount() === 0) return "Couldn't insert that";
        return true;
    }catch (Exception $e) {
        return $e->getMessage();
    }
}
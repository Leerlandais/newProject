<?php

function getSelectorForUpdate(PDO $db, int $selector) : array | string {
    $sql = "SELECT `np_css_selector`.`np_css_selector_name` AS sel_name, 
                         `np_css_selector`.`np_css_selector_id`, 
                         `np_css_attrib`.`np_css_attrib_name` AS att_name, 
                         `np_css_attrib`.`np_css_attrib_new_val` AS new_val, 
                         `np_css_attrib`.`np_css_attrib_old_val` AS old_val, 
                         `np_css_attrib`.`np_css_attrib_def_val` AS def_val
                  FROM `np_css_selector`
                  LEFT JOIN `np_selector_has_attrib`
                  ON   `np_selector_has_attrib`.`selector_has_id` = `np_css_selector`.`np_css_selector_id`
                  LEFT JOIN `np_css_attrib`
                  ON   `np_selector_has_attrib`.`attrib_has_id` = `np_css_attrib`.`np_css_attrib_id` 
                  WHERE `np_css_selector`.`np_css_selector_id` = ?";
    $stmt = $db->prepare($sql);
 
    try {
        $stmt->execute([$selector]);
        $result = $stmt->fetch();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }

}

function addAttribToSelector(PDO $db, int $selector, string $attrib, string $newVal) : bool | string {

    $sql = "INSERT INTO `np_css_attrib`
                        (`np_css_attrib_name`, 
                        `np_css_attrib_new_val`) 
            VALUES (?,?)";
    $stmt = $db->prepare($sql);
    
    try {   // add new attrib and val
    $stmt->bindValue(1, $attrib);
    $stmt->bindValue(2, $newVal);
        $stmt->execute();
      }catch(Exception $e) {
        return $e->getMessage();
    }

    $sql = "SELECT `np_css_attrib_id` AS attID
            FROM `np_css_attrib`
            WHERE `np_css_attrib_name` = ?";
    $stmt = $db->prepare($sql);
    
    try {   // get ID of new attrib
        $stmt->execute([$attrib]);
        $attribID = $stmt->fetch();
        $attID = $attribID["attID"];

    }catch(Exception $e) {
        return $e->getMessage();
    }

    $sql = "INSERT INTO `np_selector_has_attrib`
                        (`selector_has_id`, 
                        `attrib_has_id`) 
            VALUES (?,?)";
    $stmt = $db->prepare($sql);

    try {
        $stmt->bindValue(1, $selector);
        $stmt->bindValue(2, $attID);
        
        $stmt->execute();
        return true;

    }catch (Exception $e) {
        return $e->getMessage();
    }
    
        
}
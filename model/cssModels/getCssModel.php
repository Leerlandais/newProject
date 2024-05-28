<?php

function getAllCssSelectors(PDO $db) : array | string {
    $sql = "SELECT `np_css_selector`.`np_css_selector_name` AS sel_name, 
                   `np_css_selector`.`np_css_selector_id` AS css_id, 
                   `np_css_attrib`.`np_css_attrib_name` AS att_name, 
                   `np_css_attrib`.`np_css_attrib_new_val` AS new_val, 
                   `np_css_attrib`.`np_css_attrib_old_val` AS old_val, 
                   `np_css_attrib`.`np_css_attrib_def_val` AS def_val
            FROM `np_css_selector`
            LEFT JOIN `np_selector_has_attrib`
            ON   `np_selector_has_attrib`.`selector_has_id` = `np_css_selector`.`np_css_selector_id`
            LEFT JOIN `np_css_attrib`
            ON   `np_selector_has_attrib`.`attrib_has_id` = `np_css_attrib`.`np_css_attrib_id`";

try {
    $query = $db->query($sql);
        if ($query->rowCount() === 0) return "No entries yet"; //stop here if there is nothing in the db yet
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;

    }catch (Exception $e) {
        $e->getMessage();
        return $e;
    }
}


<?php

function getAllCssSelectors(PDO $db) : array | string {
    $sql = "SELECT `np_css_selector_id` AS css_id, `np_css_selector_name` AS selector
            FROM `np_css_selector`
            ORDER BY `np_css_selector_id`";

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
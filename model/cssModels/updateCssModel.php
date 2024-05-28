<?php

function getSelectorForUpdate(PDO $db, int $selector) : array | string {
    $sqlGetCss = "SELECT `np_css_selector`.`np_css_selector_name`, `np_css_selector`.`np_css_selector_id`, `np_css_attrib`.`np_css_attrib_name`   
                  FROM `np_css_selector`
                  LEFT JOIN `np_selector_has_attrib`
                  ON   `np_selector_has_attrib`.`selector_has_id` = `np_css_selector`.`np_css_selector_id`
                  LEFT JOIN `np_css_attrib`
                  ON   `np_selector_has_attrib`.`attrib_has_id` = `np_css_attrib`.`np_css_attrib_id` 
                  WHERE `np_css_selector`.`np_css_selector_id` = ?";
    $stmtGetCss = $db->prepare($sqlGetCss);

    try {
        $stmtGetCss->execute([$selector]);
        $result = $stmtGetCss->fetch();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }


}
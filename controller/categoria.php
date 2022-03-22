<?php
    require_once("../config/conection.php");
    require_once("../models/Category.php");

    $cate = new Category();

    if ($_GET["op"] == "combo") {
        $d = $cate->getCategory();
        if ((is_array($d) == true) && (count($d)> 0)) {
            foreach ($d as $row) {
                $html.= "<option value='".$row['cat_id']. "' >".$row['cat_name']."</option>";
            }
            echo $html;
        }
    }

?>
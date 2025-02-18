<?php

include '../../connect.php';

$table = "categories";

$id = filterRequest("id");

$name = filterRequest("name");


$imageold  = filterRequest("imageold");


$res =   imageUpload("../../upload/categories", "files");

if ($res == "empty") {
    $data = array(
        "categories_name" => $name,
       
    );
} else {
   deleteFile("../../upload/categories"  , $imageold) ; 
    $data = array(
        "categories_name"    => $name,
        "categories_image"   => $res,
    );
}



updateData($table, $data, "categories_id = $id");
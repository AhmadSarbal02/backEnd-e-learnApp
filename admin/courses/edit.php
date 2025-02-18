<?php

include '../../connect.php';

$table = "courses";

$id = filterRequest("id");

$name = filterRequest("name");

$details = filterRequest("details"); 

$desc = filterRequest("desc"); 



$active = filterRequest("active"); 



$catid = filterRequest("catid"); 

$imageold  = filterRequest("imageold");


$res =   imageUpload("../../upload/courses", "files");

if ($res == "empty") {
    $data = array( 
        "courses_name"       => $name, 
        "courses_video"          => $details,
        "courses_more"          => $active, 
        "courses_cat"             => $catid ,
        "courses_desc"            => $desc,
   
       
        );
} else {
   deleteFile("../../upload/categories"  , $imageold) ; 
   $data = array( 
    "courses_name"       => $name, 
    "courses_image"           => $res,
        "courses_video"          => $details,
        "courses_more"          => $active, 
        "courses_cat"             => $catid ,
        "courses_desc"            => $desc,
   
    );
}



updateData($table, $data, "courses_id = $id");
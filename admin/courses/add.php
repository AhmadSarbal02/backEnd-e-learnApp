<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "courses";

$name = filterRequest("name");
$imagename = imageUpload( "../../upload/courses" , "files") ;
$details = filterRequest("details"); 

$desc = filterRequest("desc"); 







$catid = filterRequest("catid"); 


 



$data = array( 
"courses_name"            => $name,
"courses_image"           => $imagename,
"courses_video"          => $details,
"courses_cat"             => $catid,
"courses_more"          => "1",
"courses_desc"            => $desc,
);

insertData($table , $data);
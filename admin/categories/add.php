<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "categories";

$name = filterRequest("name");



$imagename = imageUpload( "../../upload/categories" , "files") ;

$data = array( 
"categories_name" => $name,
"categories_image" => $imagename,
);

insertData($table , $data);
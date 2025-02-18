<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 


$categories = getAllData("categories" , null , null , false )  ;

$alldata['categories'] = $categories ; 

$courses = getAllData("courses1view" , "courses_more != 0" , null , false )  ;

$alldata['coursesview'] = $courses ; 

 
echo json_encode($alldata) ;
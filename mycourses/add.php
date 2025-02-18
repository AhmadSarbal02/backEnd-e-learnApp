<?php 

include "../connect.php" ; 


$usersid = filterRequest("usersid") ; 
$coursesid = filterRequest("coursesid") ; 


$data = array(
    "mycourses_usersid"  =>   $usersid , 
    "mycourses_coursesid"  =>   $coursesid
);


insertData("mycourses" ,$data) ; 
<?php 

include "../connect.php" ; 

$usersid = filterRequest("usersid") ; 
$coursesid = filterRequest("coursesid") ; 

deleteData("mycourses" , "mycourses_usersid = $usersid AND mycourses_coursesid = $coursesid") ; 
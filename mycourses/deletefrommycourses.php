<?php 

include "../connect.php" ; 

$id = filterRequest("id") ;  

deleteData("mycourses" , "mycourses_id = $id"); 
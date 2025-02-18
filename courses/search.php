<?php 

include "../connect.php" ; 

$search = filterRequest("search") ; 

getAllData("courses1view" , "courses_name LIKE '%$search%' ") ; 

?>
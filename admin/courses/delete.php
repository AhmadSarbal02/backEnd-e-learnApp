<?php

include "../../connect.php" ;

$id = filterRequest("id") ; 

$imagename = filterRequest("imagename") ; 

deleteFile( "../../upload/courses", $imagename) ; 

deleteData("courses" , "courses_id = $id ") ; 
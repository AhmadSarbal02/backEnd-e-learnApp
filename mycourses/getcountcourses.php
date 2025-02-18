<?php 

 include "../connect.php" ; 

 $usersid = filterRequest("usersid") ; 
 $coursesid = filterRequest("coursesid") ; 

 $stmt = $con->prepare("SELECT COUNT(mycourses.mycourses_id) as countcourses FROM `mycourses` WHERE mycourses_usersid = $usersid AND mycourses_coursesid = $coursesid ");
 $stmt->execute() ; 

 $count = $stmt->rowCount() ; 

 $data = $stmt->fetchColumn() ; 
 

  if ($count > 0 ){
    
    echo json_encode(array("status" => "success" , "data" => $data)) ; 

  } else {

    echo json_encode(array("status" => "success" , "data" => "0")) ; 

  }


?>
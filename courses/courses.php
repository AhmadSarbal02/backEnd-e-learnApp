<?php
include "../connect.php";
$categoryid = filterRequest("id");
$userid =  filterRequest("usersid");

// getAllData("coursesview" , "categories_id = $categoryid" )  ;


$stmt = $con->prepare("SELECT courses1view.* , 1 as mycourses FROM courses1view
INNER JOIN mycourses ON mycourses.mycourses_coursesid = courses1view.courses_id AND mycourses.mycourses_usersid = $userid
WHERE categories_id = $categoryid
UNION ALL
SELECT * , 0 as mycourses FROM courses1view
WHERE categories_id = $categoryid AND courses_id NOT IN ( SELECT courses1view.courses_id FROM courses1view
INNER JOIN mycourses ON mycourses.mycourses_coursesid = courses1view.courses_id AND mycourses.mycourses_usersid = $userid
 )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}
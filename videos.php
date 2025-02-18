<?php
include "connect.php";


$stmt = $con->prepare("SELECT categories.categories_name AS categories_name, courses.courses_name AS course_name, videos.videos_name, videos.videos_url FROM categories JOIN courses ON categories.categories_id = courses.courses_cat JOIN videos ON courses.courses_id = videos.videos_coursesid;");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}

SELECT categories.categories_name AS categories_name, courses.courses_name AS course_name, videos.videos_name, videos.videos_url FROM categories JOIN courses ON categories.categories_id = courses.courses_cat JOIN videos ON courses.courses_id = videos.videos_coursesid;
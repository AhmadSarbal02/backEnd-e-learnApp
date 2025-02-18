<?php


include "../connect.php";


$id = filterRequest("id");


getAllData("mycoursesview", "mycourses_usersid = ?  ", array($id));
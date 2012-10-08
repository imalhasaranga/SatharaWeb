<?php

include_once 'redirectsesion.php';
include_once 'Db.php';
include_once 'newfunctions.php';


$grade = $_POST["grade"];
$subject = $_POST["subject"];
$teacher = $_POST["teacher"];
$day = $_POST["day"];
$time = $_POST["time"];



Db::SqlQuery("insert into classes(Grade,Subject,Teacher,Day,Time) values('{$grade}','{$subject}','{$teacher}','{$day}','{$time}') ");

redirect("../AdminInstitute.php")
?>
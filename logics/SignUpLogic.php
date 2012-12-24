<?php
session_start();
include_once 'redirectsesion.php';
include_once 'Db.php';
include_once 'newfunctions.php';


$fmname = $_POST["fname"] . " " . $_POST["mname"];
$lname = $_POST["lname"];
$contact = $_POST["contact"];
$usertype = $_POST["usertype"];
$qualification = $_POST["qualification"];



Db::SqlQuery("insert into user_main(FMname,Lname,contactnumber,user_type,comp_id) values('{$fmname}','{$lname}','{$contact}','{$usertype}','1') ");
$var = mysql_insert_id();
if ($usertype == 'Teacher') {
    Db::SqlQuery("insert into teacher(user_teacher,qualification) values('$var','$qualification')");
}
redirect("../AdminUsermanage.php")
?>
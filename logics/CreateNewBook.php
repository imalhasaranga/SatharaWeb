<?php

include_once 'redirectInlogics.php';
include_once 'Db.php';
include_once 'newfunctions.php';
$a = session_id();

$title = Secure_mysql($_POST["title"]);
$grade = Secure_mysql($_POST["grade"]);

$price = Secure_mysql($_POST["price"]);
$description = Secure_mysql($_POST["description"]);
$booktype = Secure_mysql($_POST["booktype"]);



$imagename = "";

if (($_FILES["imagefile"]["type"] == "image/gif") || ($_FILES["imagefile"]["type"] == "image/jpeg") || ($_FILES["imagefile"]["type"] == "image/pjpeg")) {

    $imagename = $_FILES["imagefile"]["name"] = str_replace(" ", "", date("Y-m-d hh-mm-ss")) . $a . $_FILES["imagefile"]["name"];
    move_uploaded_file($_FILES["imagefile"]["tmp_name"], "../uploaded_images/" . $imagename);
    $imagename = "uploaded_images/" . $imagename;
} else {
    $imagename = "uploaded_images/default.jpg";
}


//echo "insert into book(Book_title,Book_grade,image,Description,Price,mag_or_bok,comp_id) values('{$title}','{$grade}','{$imagename}','{$description}','{$price}','{$booktype}','1') ";
Db::SqlQuery("insert into book(Book_title,Book_grade,image,Description,Price,mag_or_bok,comp_id) values('{$title}','{$grade}','{$imagename}','{$description}','{$price}','{$booktype}','1') ");
redirect("../Adminbooks.php")
?>
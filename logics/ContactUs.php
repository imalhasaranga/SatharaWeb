<?php

include_once 'redirectsesion.php';
include_once 'Db.php';
include_once 'newfunctions.php';

$name = Secure_mysql($_POST["name"]);
$email = Secure_mysql($_POST["email"]);
$message = Secure_mysql($_POST["message"]);

Db::SqlQuery("insert into contact_messages(Name,email,Message,comp_id) values('{$name}','{$email}','{$message}','1')");

redirect("../ContactUs.php");
?>

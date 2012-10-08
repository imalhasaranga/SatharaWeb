<?php

include_once 'Db.php';
include_once 'newfunctions.php';
//create session or getting excisting value
session_start();


// secure_mysql function is written to escape from mysql injecsion
// and other hacks

$username1 = Secure_mysql($_POST["user"]);
$pass = Secure_mysql($_POST["pass"]);


$resultarry = Db::SqlQuery("select* from login where user_name   = '{$username1}' && password = '{$pass}'");

if($resultarry = mysql_fetch_array($resultarry)){

    if($resultarry["is_active"] == "1"){
            $_SESSION["user_main_id"] = $resultarry["user_main_id"];
            $_SESSION["username"] = $resultarry["user_name"];
            $_SESSION["password"] = $resultarry["password"];
            $_SESSION["status"] = "loged";
            $_SESSION["privilage"] = $resultarry["privilage"];
            redirect("../Adminbasicneeds.php");

    }else{

            $_SESSION["status"] = "Account is in a Deactivated state";
            redirect("../Admin.php");
    }

}else{
            $_SESSION["status"] = "sorry login failed, Please check login details";
            redirect("../Admin.php");

}


Db::close();

?>

<?php
session_start();
include_once 'newfunctions.php';
if (isset($_SESSION["status"])) {
    if ($_SESSION["status"] != "loged") {

        redirect("../Admin.php");
    }
} else {

    redirect("../Admin.php");
}
?>

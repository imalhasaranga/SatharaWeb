<?php

include_once 'Db.php';
include_once 'newfunctions.php';

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $state = $_GET["state"];
    
    if($state == "Active_ndfrnt"){
        
        $state = "Active_nrml";
    }else{
        
        $state = "Active_ndfrnt";
    }
    
    Db::SqlQuery("UPDATE book SET show_type = '".$state."' WHERE Book_ID = '".$id."'");
    redirect("../Adminbooks.php");
}
?>

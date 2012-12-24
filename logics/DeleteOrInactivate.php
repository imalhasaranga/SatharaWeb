<?php

include_once 'redirectsesion.php';
include_once 'Db.php';
include_once 'newfunctions.php';

$id = $_GET["id"];
$ty = $_GET["ty"];

if ($ty == 1) {
    Db::SqlQuery("update book_grade set Is_active='0' where Book_grade_id ='{$id}' ");
    redirect("../Adminbasicneeds.php");
} else if ($ty == 2) {
    Db::SqlQuery("update grade set Is_active='0' where Grade_id ='{$id}' ");
    redirect("../Adminbasicneeds.php");
} else if ($ty == 3) {
    Db::SqlQuery("update subjects set Is_active='0' where Subject_id ='{$id}' ");
    redirect("../Adminbasicneeds.php");
} else if ($ty == 4) {
    Db::SqlQuery("delete from book where Book_ID ='{$id}' ");

    if ($_GET['img'] != "uploaded_images/default.jpg") {
        $fh = fopen("../".$_GET['img'], 'w') or die("can't open file");
        fclose($fh);
        unlink("../".$_GET['img']);
    }
    redirect("../Adminbooks.php");
    
}else if ($ty == 5) {
    Db::SqlQuery("delete from classes where class_id ='{$id}' ");
    redirect("../AdminInstitute.php");
    
}else if ($ty == 6) {
    Db::SqlQuery("update user_main set is_active='0' where user_main_id ='{$id}' ");
    redirect("../AdminUsermanage.php");
}else if ($ty == 7) {
    Db::SqlQuery("delete from contact_messages where Message_id ='{$id}' ");
    redirect("../AdminContactMessages.php");
    
}
?>

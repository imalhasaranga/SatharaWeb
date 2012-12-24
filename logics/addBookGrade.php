<?php
include_once 'redirectsesion.php';
include_once 'newfunctions.php';
include_once 'Db.php';

if($_GET["id"] == 1){
Db::SqlQuery("insert into book_grade(Book_grade) values('{$_POST["bookgrade"]}') ");
}else if($_GET["id"] == 2){
    Db::SqlQuery("insert into grade(Grade) values('{$_POST["grade"]}') ");  
}else if($_GET["id"] == 3){
    Db::SqlQuery("insert into subjects(Subjects) values('{$_POST["subject"]}') ");  
}
redirect("../Adminbasicneeds.php")

?>

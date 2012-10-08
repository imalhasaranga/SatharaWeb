
<?php 
    
include_once 'logics/newfunctions.php';
include_once 'logics/Db.php';

?>

<ul id="verticalmenu" class="glossymenu">
    <li><a href="#">Institue Home</a></li>
    
    <?php
$result = Db::SqlQuery("select* from subjects where is_active = '1' ");
while($arry = mysql_fetch_array($result)){
?>
    
    <li><a href="Subjectvice.php?id=<?php echo $arry['Subject_id'] ?>&name=<?php echo $arry['Subjects'] ?>"><?php echo $arry['Subjects'] ?></a></li>
    
    <?php  } ?>

</ul>
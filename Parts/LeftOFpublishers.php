<?php 
    
include_once 'logics/newfunctions.php';
include_once 'logics/Db.php';

?>



<ul id="verticalmenu" class="glossymenu">
<li><a href="#">Publishers Home</a></li>
<?php
$result = Db::SqlQuery("select* from book_grade where is_active = '1' ");
while($arry = mysql_fetch_array($result)){
?>
    <li><a href="#"><?php echo $arry['Book_grade'] ?></a>
	<ul>
    <li><a href="pub_books.php?id=<?php echo $arry['Book_grade_id'] ?>&type=mag">Magazines</a></li>
    <li><a href="pub_books.php?id=<?php echo $arry['Book_grade_id'] ?>&type=bok">Books</a></li>
    </ul>
</li>

<?php  } ?>
</ul>
<?php 
    
include_once 'logics/newfunctions.php';
include_once 'logics/Db.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sathara Publishers, Sathara Prakashakayo, Sathara Institute, Kids Zone</title>

<link href="Styles/ssmain.css" rel="stylesheet" type="text/css"/>
<link href="Styles/sspublishers.css" rel="stylesheet" type="text/css"/>
<link href="Styles/leftmenu.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="scripts/leftmenu.js"></script>

<script language="javascript">
	function restoreNow(id){
		if(document.getElementById(id).value==''){
			if(id == 'txt_username'){
				document.getElementById(id).style.background='url(images/username.jpg)';
			}else if(id == 'txt_password'){
				document.getElementById(id).style.background='url(images/password.jpg)';
			}
	  		
		}else{
			document.getElementById(id).style.background='#FFFFFF';
			
		}
	}
	
	function mainColor2(id){
		document.getElementById(id).style.background='#FFFFFF';
	}

</script>


</head>

<body>


	<?php include_once("Parts/top_header.php"); ?>

<div id="container" align="center">
	<!-- main -->
    <?php include_once("Parts/galary.php"); ?>
	
    <div id="content" align="center">
    	<div id="content_left">
        	
            <?php include_once("Parts/LeftOFpublishers.php"); ?>
            <br/>
         <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>
        
        
        </div>
        
        <div id="content_right">

            <div id="content_right_products">
            	<span id="pub_title">Pre School Magazines</span><br/><br/>
             
                
                <?php 
                $result = Db::SqlQuery("select* from book where show_type != 'inactive' && book_grade ='{$_GET["id"]}' && mag_or_bok ='{$_GET["type"]}'  ");
                while($arry = mysql_fetch_array($result)){
                
                ?>
                <div class="productshow">
                    <div class="protitle">
                    	<?php echo $arry["Book_title"] ?>
                    </div>
                	<div class="prpimage">
                    	<a href="#"><img src="<?php echo $arry["image"] ?>" border="0" width="220" height="240" /></a>
                    </div>
                    <div class="proprice">
                    	<?php echo $arry["Price"] ?>
                    </div>
                </div>
                
                <?php } ?>
                
                
                
            </div> 
        </div>  
        
    </div>	<!-- Close the content div.............................. -->
	
    <div id="push"></div>
    
</div>	<!-- Close the container div.............................. -->

<div id="footer" align="center">
	<div id="footer_top">
    	<div id="links2">
            	<a href="#"><span class="links2">Home</span></a>
                <a href="#"><span class="links2">About</span></a>
                <a href="#"><span class="links2">Publishers</span></a>
                <a href="#"><span class="links2">Institute</span></a>
                <a href="#"><span class="links2">KidsZone</span></a>
                <a href="#"><span class="links2">Contact</span></a>
                <a href="#"><span class="links2">Register</span></a>
    	</div>
    </div>
    <!-- footer -- load -->
     <?php include_once("Parts/footer.php"); ?>
</div>

</body>
</html>

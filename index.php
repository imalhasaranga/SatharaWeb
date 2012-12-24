
<?php include_once 'logics/newfunctions.php';  ?>
<?php include_once 'logics/Db.php' ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sathara Publishers, Sathara Prakashakayo, Sathara Institute, Kids Zone</title>

<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<link href="Styles/ssmain.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="scripts2/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
  	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
<script type="text/javascript" src="imagerotater2.js""></script>

</head>

<body>

<div id="toparea" align="center">
	<!-- load head bar -->
    <?php include_once("Parts/top_header.php"); ?>
</div>

<div id="container" align="center">
	<!-- main -->
    <?php include_once("Parts/galary.php"); ?>
	
    <div id="content" align="center">
    	<div id="link_pub" class="mainlinks" align="left">
        	<div class="mainlink_top">
            	<a href="publishers.php"><img src="images/mainfrm_top2.gif" border="0" height="50" width="320"/></a>
           	</div>
        	
            <div class="mainlink_mid">
            	<img src="images/home_mid.png" border="0" />
            </div>
        	
            <div class="mainlink_bot" align="justify">
            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        
        <div id="link_ins" class="mainlinks" align="right">
        	<div class="mainlink_top">
            	<a href="institute.php"><img src="images/mainfrm_top2ins.gif" border="0" height="50" width="320"/></a>
            </div>
        	
            <div class="mainlink_mid">
            	<img src="images/home_mid2.png" border="0" />
            </div>
        	
            <div class="mainlink_bot" align="justify">
            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div> 
        </div>
        
        <div id="link_kid" class="mainlinks">
        	<div class="mainlink_top">
            	<a href="#"><img src="images/main_top2kid.gif" border="0" height="50" width="320"/></a>
            </div>
        	
            <div class="mainlink_mid">
            	<img src="images/home_mid3.png" border="0" />
            </div>
        	
            <div class="mainlink_bot" align="justify">
            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        
        
        
        
    
    </div>	<!-- Close the content div.............................. -->
	
    <div id="push"></div>
    
</div>	<!-- Close the container div.............................. -->

<div id="footer" align="center">
	<!-- footer -- load -->
     <?php include_once("Parts/footer.php"); ?>
</div>

</body>
</html>

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
<link href="Styles/sspublishers.css" rel="stylesheet" type="text/css"/>
<link href="Styles/leftmenu.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="scripts/leftmenu.js"></script>

<script type="text/javascript" src="scripts2/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
  	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
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
        	<div id="content_right_welcome" align="justify">
            	<img src="images/titledot.jpg" /><span id="pub_title">Sathara Publishers (Since 1979)</span><br/><br/>
                
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                
                
            </div>
            
            <div id="content_right_mainimage" align="left">
            	<p><img src="images/titledot.jpg" /><span id="pub_title">Services of Sathara Publishers</span><br/><br/>
            	  
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Label Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Book Cover Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Digital Animations</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Magazine Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Barcode Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Label Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Book Cover Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Digital Animations</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Magazine Printing</span><br/><br/>
            	  <img src="images/servicesdot.jpg" /><span id="pub_services">Barcode Printing</span><br/>
           	  </p>
           	  <p>&nbsp;</p>
            	<p><br/>
          	  </p>
          </div>
            <br/>
            <div id="content_right_latest" >
            	<span id="pub_title" style="margin-top:50px;">Latest Books and Magazines</span><br/><br/>
                
                
                <?php 
                $result = Db::SqlQuery("select* from book where show_type = 'Active_ndfrnt' limit 6 ");
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
                <?php 
                }
                
                ?>
                
                
                
                
            </div> 
        </div>  
        
    </div>	<!-- Close the content div.............................. -->
	
    <div id="push"></div>
    
</div>	<!-- Close the container div.............................. -->

<!-- footer -- load -->
     <?php include_once("Parts/footer.php"); ?>


</body>
</html>

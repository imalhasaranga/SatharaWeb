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
	<?php include_once("Parts/galary.php"); ?>
	
    <div id="content" align="center">
    	<div id="content_left">
        	
            <ul id="verticalmenu" class="glossymenu">
<li><a href="#">Pre School</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade1</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade2</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade3</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade4</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade5</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade6</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade7</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade8</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade9</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade10</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>
<li><a href="#">Grade11</a>
	<ul>
    <li><a href="#">Magazines</a></li>
    <li><a href="#">Books</a></li>
    </ul>
</li>

</ul>
            <br>
         <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>
        
        
        </div>
        
        <div id="content_right">

            <div id="content_right_products">
            	<span id="pub_title">Pre School Magazines</span><br><br>
                
                <?php 
                
				for($x = 0; $x < 2; $x++){
					echo '<div class="productshow">
                	<div class="protitle">
                    	Uththara Sathara-Grade6
                    </div>
                	<div class="prpimage">
                    	<a href="#"><img src="images/proimage1.jpg" border="0" width="220" height="240" /></a>
                    </div>
                    <div class="proprice">
                    	280.00 Rs
                    </div>
                </div>
                
                <div class="productshow">
                	<div class="protitle">
                    	Uththara Sathara-Grade6
                    </div>
                	<div class="prpimage">
                    	<a href="#"><img src="images/proimage1.jpg" border="0" width="220" height="240" /></a>
                    </div>
                    <div class="proprice">
                    	280.00 Rs
                    </div>
                </div>
                
                <div class="productshow">
                	<div class="protitle">
                    	Uththara Sathara-Grade6
                    </div>
                	<div class="prpimage">
                    	<a href="#"><img src="images/proimage1.jpg" border="0" width="220" height="240" /></a>
                    </div>
                    <div class="proprice">
                    	280.00 Rs
                    </div>
                </div>';
				
				}
                
                ?>
                
            </div> 
        </div>  
        
    </div>	<!-- Close the content div.............................. -->
	
    <div id="push"></div>
    
</div>	<!-- Close the container div.............................. -->


	<?php include_once("Parts/footer.php"); ?>


</body>
</html>

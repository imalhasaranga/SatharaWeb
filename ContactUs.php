<?php
include_once 'logics/newfunctions.php';
include_once 'logics/Db.php';
?>


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
		
        <script language="javascript">
	function restoreNow(id){
		if(document.getElementById(id).value==''){
			if(id == 'name'){
				document.getElementById(id).style.background='url(images2/yourname.png)';
			}else if(id == 'contact'){
				document.getElementById(id).style.background='url(images2/yourcontact.png)';
			}else if(id == 'message'){
				document.getElementById(id).style.background='url(images2/yourmsgs.png) no-repeat';
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
            
                <div id="content_left_contact" align="center">
                    
                    <form action="logics/ContactUs.php" method="post">
                    
                    <div id="nameholder" class="contactform">
                    	<input name="name" type="text" id="name" size="40" class="contact_fill"  onfocus="mainColor2('name')" onblur="restoreNow('name')" align="center"/>
                    </div>
                    <div id="contactholder" class="contactform">
                    	<input name="email" type="text" id="contact" size="40" class="contact_fill" onfocus="mainColor2('contact')" onblur="restoreNow('contact')"/>
                    </div>
                    <div id="msgholder" class="contactform">
                    	<textarea name="message" cols="40" rows="5" id="message" onfocus="mainColor2('message')" onblur="restoreNow('message')"></textarea>
                    </div>
                    <div id="btnholder" class="contactform">
                    	<input type="submit" value="Send Us" id="btnsend"/>
                    </div>

                    
                    </form>
                    
                </div> 
                
                <div id="content_right_contact">
                	
                </div> 

            </div>	<!-- Close the content div.............................. -->

            <div id="push"></div>

        </div>	<!-- Close the container div.............................. -->

      
            <!-- footer -- load -->
<?php include_once("Parts/footer.php"); ?>

    </body>
</html>

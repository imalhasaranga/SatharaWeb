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
        	
           <?php include_once("Parts/LeftOFinstitute.php"); ?>
            <br>
         <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>
        
        
        </div>
        
        <div id="content_right">
        	<div id="content_right_welcome" align="justify">
            	<img src="images/titledot.jpg" /><span id="pub_title">Sathara Institute (Since 2006)</span><br><br>
                
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                
                
            </div>
            
            <div id="content_right_mainimage" align="left">
            	<img src="images/titledot.jpg" /><span id="pub_title">Find Us</span><br><br>
                
                <iframe width="300" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sathara+Institute+of+Education,+Maharagama,+Western+Province,+Sri+Lanka&amp;aq=1&amp;oq=sathara+in&amp;sll=37.0625,-95.677068&amp;sspn=36.589577,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Sathara+Institute+of+Education,+Maharagama,+Colombo,+Western+Province+10280,+Sri+Lanka&amp;ll=6.844806,79.930201&amp;spn=0.001401,0.002642&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Sathara+Institute+of+Education,+Maharagama,+Western+Province,+Sri+Lanka&amp;aq=1&amp;oq=sathara+in&amp;sll=37.0625,-95.677068&amp;sspn=36.589577,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Sathara+Institute+of+Education,+Maharagama,+Colombo,+Western+Province+10280,+Sri+Lanka&amp;ll=6.844806,79.930201&amp;spn=0.001401,0.002642&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                
            </div>
            <p> 
            </p>
            <p> 
            &ensp;
            </p>
            <br/>
          <div id="content_right_latest">
            
           	<span id="pub_title">TimeTable</span><br><br>
          <a href="Timetable.php?id=1" > Sunday</a>
          <a href="Timetable.php?id=2" > Monday</a>
          <a href="Timetable.php?id=3" > Tuesday</a>
          <a href="Timetable.php?id=4" > wednesday</a>
          <a href="Timetable.php?id=5" > Thursday</a>
          <a href="Timetable.php?id=6" > Friday</a>
          <a href="Timetable.php?id=7" > Saturday</a>
          
          </div> 
        </div>  
        
    </div>	<!-- Close the content div.............................. -->
	
    <div id="push"></div>
    
</div>	<!-- Close the container div.............................. -->


<?php include_once("Parts/footer.php"); ?>


</body>
</html>

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
            <?php include_once("Parts/galary.php"); ?>

            <div id="content" align="center">
                <div id="content_left">

                    <?php include_once("Parts/LeftOFinstitute.php"); ?>
                    <br/>
                    <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>


                </div>

                <div id="content_right">
                    <p><img src="images/titledot.jpg" /><span id="pub_title">Classes for the subject <?php echo $_GET['name'] ?></span></p>
                    <table id="classtbl2" cellpadding="0" cellspacing="0">
                      <tr>
                        <th width="35%" align="left">Teacher</th>
                        <th width="26%" align="left">Grade</th>
                        <th width="18%" align="left">Day</th>
                        <th width="21%" align="left">Time</th>
                      </tr>
                      <?php
                        $result = Db::SqlQuery("SELECT* FROM classes LEFT JOIN grade ON classes.Grade = grade.Grade_id LEFT JOIN user_main ON classes.Teacher = user_main.user_main_id WHERE classes.Subject = '{$_GET["id"]}'");
                        while ($arry = mysql_fetch_array($result)) {
                            ?>
                      <tr>
                        <td align="left">&nbsp;<?php echo $arry['FMname']." ".$arry['Lname'] ?></td>
                        <td align="left">&nbsp;<?php echo $arry['Grade'] ?></td>
                        <td align="left"><?php echo $arry['Day'] ?></td>
                        <td align="left"><?php echo $arry['Time'] ?></td>
                      </tr>
                      <?php } ?>
                    </table>
      <p><br/>
                        <br/>
                    </p>
                </div>  

            </div>	<!-- Close the content div.............................. -->

            <div id="push"></div>

        </div>	<!-- Close the container div.............................. -->


        <?php include_once("Parts/footer.php"); ?>


    </body>
</html>

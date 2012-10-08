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
                    <br/>
                    <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>


                </div>

                <div id="content_right">
                    <p><img src="images/titledot.jpg" /><span id="pub_title">Classes for the subject <?php echo $_GET['name'] ?></span></p>
                    <table width="95%" border="1" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="35%" height="29" align="center" valign="middle">Teacher</td>
                            <td width="26%" align="center" valign="middle">Grade</td>
                            <td width="18%" align="center" valign="middle">Day</td>
                            <td width="21%" align="center" valign="middle">Time</td>
                        </tr>

                        <?php
                        $result = Db::SqlQuery("SELECT* FROM classes LEFT JOIN grade ON classes.Grade = grade.Grade_id LEFT JOIN user_main ON classes.Teacher = user_main.user_main_id WHERE classes.Subject = '{$_GET["id"]}'");
                        while ($arry = mysql_fetch_array($result)) {
                            ?>
                        
                            <tr>
                                <td height="31" align="left" valign="middle">&nbsp;<?php echo $arry['FMname']." ".$arry['Lname'] ?></td>
                                <td align="left" valign="middle">&nbsp;<?php echo $arry['Grade'] ?></td>
                                <td align="center" valign="middle"><?php echo $arry['Day'] ?></td>
                                <td align="center" valign="middle"><?php echo $arry['Time'] ?></td>
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

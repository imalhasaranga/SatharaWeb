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
                <div id="content_right"  style="margin-left:50px;">
                    <p>&nbsp;</p>
                    
                    <form action="logics/ContactUs.php" method="post">
                    
                    <table width="70%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="9%">&nbsp;</td>
                            <td width="25%">Name</td>
                            <td width="12%" align="center">:-</td>
                            <td width="2%">&nbsp;</td>
                            <td width="47%"><input name="name" type="text" size="40" /></td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>email</td>
                            <td align="center">:-</td>
                            <td>&nbsp;</td>
                            <td><input name="email" type="text" id="email" size="40" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Message</td>
                            <td align="center">:-</td>
                            <td>&nbsp;</td>
                            <td><textarea name="message" cols="40" rows="10" id="message"></textarea></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right"><input type="submit" value="Inform" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    
                    </form>
                    <p>&nbsp;</p>
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

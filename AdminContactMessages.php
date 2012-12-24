<?php
include_once 'logics/redirectsesion.php';
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


            <div id="content" align="center" style="width:100%"></div>	
            <!-- Close the content div.............................. -->

            <div id="push1">
                <p>
                    <?php include_once("Parts/AdminMenu.php"); ?>
                </p>
                <p>All Messages </p>
                <table width="70%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="23%" align="center" bgcolor="#CCCCCC">Name</td>
                        <td width="18%" align="center" bgcolor="#CCCCCC">Email</td>
                        <td width="46%" align="center" bgcolor="#CCCCCC">Message</td>
                        <td width="6%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>
                        <td width="7%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>      
                    </tr>

                    <?php
                    $result = Db::SqlQuery("select* from contact_messages where is_active = '1' ");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>
                        <tr>  
                            <td align="left" valign="middle"><?php echo $arry['Name'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['email'] ?></td>
                            <td align="left" valign="middle"><?php echo $arry['Message'] ?></td>      
                            <td align="center" valign="middle"><a href="?id=<?php echo $arry['Message_id'] ?>">Reply</a></td>
                            <td align="center"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['Message_id'] ?>&ty=7" onclick="return confirm('Are you sure?');">delete</a></td>                       	
                        </tr>
                    <?php } ?>                  
                </table>
                <br/>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>

        </div>	<!-- Close the container div.............................. -->


        <?php include_once("Parts/footer.php"); ?>


    </body>
</html>

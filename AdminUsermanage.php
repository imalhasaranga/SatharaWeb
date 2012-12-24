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
              <form action="logics/SignUpLogic.php" method="post">
                <table width="60%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="9%" height="36">&nbsp;</td>
                    <td width="32%">First Name</td>
                    <td width="7%" align="center">:-</td>
                    <td width="37%"><input name=" fname" type="text" id=" fname" style="width:220px;" border="1"/></td>
                    <td width="6%">&nbsp;</td>
                    <td width="9%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="30">&nbsp;</td>
                    <td>Middle Name</td>
                    <td align="center">:-</td>
                    <td><input name="mname" type="text" id="mname" style="width:220px;" border="1"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="32">&nbsp;</td>
                    <td>Last Name</td>
                    <td align="center">:-</td>
                    <td><input name="lname" type="text" id="lname" style="width:220px;" border="1"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="31">&nbsp;</td>
                    <td>Contact number</td>
                    <td align="center">:-</td>
                    <td><input name="contact" type="text" id="contact" style="width:220px;" border="1"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="32">&nbsp;</td>
                    <td>User Type</td>
                    <td align="center">:-</td>
                    <td>
                    <select name="usertype" id="usertype">
                    <option selected="selected">Teacher</option>
                    <option>Admin</option>
                    </select>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="33">&nbsp;</td>
                    <td>Qualification (only for teachers)</td>
                    <td align="center">:-</td>
                    <td><input name="qualification" type="text" id="qualification" style="width:240px;" border="1"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="21">&nbsp;</td>
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
                    <td align="right"><input type="submit" value="Add User details"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
              </table>
              </form>
                <p>ALL USERS </p>
                <table width="70%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="42%" height="27" align="center" bgcolor="#CCCCCC">Name</td>
                        <td width="11%" align="center" bgcolor="#CCCCCC">Contact</td>
                        <td width="30%" align="center" bgcolor="#CCCCCC">Qualification</td>
                        <td width="8%" align="center" bgcolor="#CCCCCC">Type</td>
                        <td width="3%" align="center" bgcolor="#CCCCCC">&nbsp;</td>
                        <td width="6%" align="center" bgcolor="#CCCCCC">&nbsp;</td>
                        
                    </tr>

                    <?php
                    $result = Db::SqlQuery("select* from user_main left join teacher on  user_main.user_main_id =  teacher.user_teacher where user_main.is_active ='1' ");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>
                        <tr>  
                            <td align="left" valign="middle"><?php echo $arry['FMname']." ".$arry['Lname'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['contactnumber'] ?></td>
                            <td align="left" valign="middle"><?php echo $arry['user_teacher'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['user_type'] ?></td>
                            <td align="center" valign="middle"><a href="?id=<?php echo $arry['user_main_id'] ?>">edit</a></td>
                            <td height="21" align="center"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['user_main_id'] ?>&ty=6" onclick="return confirm('Are you sure?');">delete</a></td>                       	
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

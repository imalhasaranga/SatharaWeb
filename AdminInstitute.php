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
                <p>Create New class </p>
                <form action="logics/CreateNewclassd.php" method="post" >
                <table width="70%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="24%">&nbsp;</td>
                        <td width="21%">&nbsp;</td>
                        <td width="4%">&nbsp;</td>
                        <td width="2%">&nbsp;</td>
                        <td width="32%">&nbsp;</td>
                        <td width="17%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="35">&nbsp;</td>
                        <td>Grade</td>
                        <td align="center" valign="middle">:-</td>
                        <td>&nbsp;</td>
                        <td>
                            <?php
                            $result = Db::SqlQuery("select* from grade where is_active = '1' ");
                            ?>
                            <select name="grade" id="grade">
                                <?php
                                while ($arry = mysql_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $arry['Grade_id'] ?>"><?php echo $arry['Grade'] ?></option>
                                <?php } ?>
                            </select>



                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="34">&nbsp;</td>
                        <td>Subject</td>
                        <td align="center" valign="middle">:-</td>
                        <td>&nbsp;</td>
                        <td>
                            
                            <?php
                            $result = Db::SqlQuery("select* from subjects where is_active = '1' ");
                            ?>
                            
                            <select name="subject" id="subject">
                                <?php
                                while ($arry = mysql_fetch_array($result)) {
                                    ?>
                                <option value="<?php echo $arry['Subject_id'] ?>"><?php echo $arry['Subjects'] ?></option>
                                 <?php } ?>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="40">&nbsp;</td>
                        <td>Teacher</td>
                        <td align="center" valign="middle">:-</td>
                        <td>&nbsp;</td>
                        <td>
                            
                             <?php
                            $result = Db::SqlQuery("select* from user_main where is_active = '1' && user_type ='Teacher' ");
                            ?>
                            
                            <select name="teacher" id="teacher">
                                <?php
                                while ($arry = mysql_fetch_array($result)) {
                                    ?>
                                <option value="<?php echo $arry['user_main_id'] ?>"><?php echo $arry['FMname'] ?></option>
                                 <?php } ?>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="35">&nbsp;</td>
                        <td>Day</td>
                        <td align="center" valign="middle">:-</td>
                        <td>&nbsp;</td>
                        <td>
                            <select name="day">
                                <option >Sunday</option>
                                <option >Monday</option>
                                <option >Tuesday</option>
                                <option >Wednesday</option>
                                <option >Thursday</option>
                                <option >Friday</option>
                                <option >Saturday</option>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="32">&nbsp;</td>
                        <td>Time</td>
                        <td align="center" valign="middle">:-</td>
                        <td>&nbsp;</td>
                        <td>
                            <input name="time" type="text" value="10:00 am to 12:00 pm" size="40" border="1" />
                    </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="51">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td align="right"><input type="submit" value="Add new class"  style="margin-right:20px;" /></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                </form>
              <p>All TimeTable</p>
                <table width="75%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="12%" align="center" bgcolor="#CCCCCC">Grade</td>
                        <td width="18%" align="center" bgcolor="#CCCCCC">Subject</td>
                        <td width="30%" align="center" bgcolor="#CCCCCC">Teacher</td>
                         <td width="13%" align="center" bgcolor="#CCCCCC">Day</td>
                        <td width="17%" align="center" bgcolor="#CCCCCC">Time</td>
                        <td width="4%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>
                        <td width="6%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>      
                    </tr>

                    <?php
                    $result = Db::SqlQuery("select* from allclasses order by day  ");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>
                        <tr>  
                            <td align="left" valign="middle"><?php echo $arry['Grade'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['Subjects'] ?></td>
                            <td align="left" valign="middle"><?php echo $arry['teacher'] ?></td>  
                             <td align="center" valign="middle"><?php echo $arry['Day'] ?></td>
                            <td align="left" valign="middle"><?php echo $arry['Time'] ?></td>     
                            <td align="center" valign="middle"><a href="?id=<?php echo $arry['class_id'] ?>">Reply</a></td>
                            <td align="center"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['class_id'] ?>&ty=5" onclick="return confirm('Are you sure?');">delete</a></td>                       	
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

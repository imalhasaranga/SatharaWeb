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
            <?php include_once("Parts/AdminMenu.php"); ?>
                <p>&nbsp;</p>
                SATHARA PUBLICATIONS - GRADES OF THE BOOKS AVAILABLE 

                <table width="70%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="69%" height="27" align="center" bgcolor="#CCCCCC">Book Grade</td>
                        <td width="16%" align="center" bgcolor="#CCCCCC">Edit</td>
                        <td width="15%" align="center" bgcolor="#CCCCCC">Delete</td>
                    </tr>

                    <?php
                    $result = Db::SqlQuery("select* from book_grade where Is_active ='1'");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>

                        <tr>
                            <td height="21" align="left">&nbsp;<?php echo $arry['Book_grade'] ?></td>
                        <td align="center" valign="middle"><a href="?id=<?php echo $arry['Book_grade_id'] ?>">edit</a></td>
                            <td align="center" valign="middle"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['Book_grade_id'] ?>&ty=1" onclick="return confirm('Are you sure?');">delete</a></td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td height="45" colspan="3" align="center" valign="middle" bgcolor="#CCCCCC">
                            <form action="logics/addBookGrade.php?id=1" method="post">Book grade &nbsp;&nbsp;<input type="text" name="bookgrade" /> &nbsp; <input type="submit" value="Add Book grade" /></form>
                        </td>

                    </tr>
                </table>
                <br/>
                SATHARA INSTITUTE - GRADES 

                <table width="70%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="69%" height="27" align="center" bgcolor="#CCCCCC">Grade</td>
                        <td width="16%" align="center" bgcolor="#CCCCCC">Edit</td>
                        <td width="15%" align="center" bgcolor="#CCCCCC">Delete</td>
                  </tr>

                    <?php
                    $result = Db::SqlQuery("select* from grade where Is_active ='1'");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>

                        <tr>
                            <td height="21" align="left">&nbsp;<?php echo $arry['Grade'] ?></td>
                        <td align="center" valign="middle"><a href="?id=<?php echo $arry['Grade_id'] ?>">edit</a></td>
                            <td align="center" valign="middle"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['Grade_id'] ?>&ty=2"   onclick="return confirm('Are you sure?');">delete</a></td>
                  </tr>

                    <?php } ?>
                    <tr>
                        <td height="45" colspan="3" align="center" valign="middle" bgcolor="#CCCCCC">
                          <form action="logics/addBookGrade.php?id=2" method="post">
                            Add 
grade &nbsp;&nbsp;
<input type="text" name="grade" /> &nbsp; <input type="submit" value="Add grade" /></form>
                        </td>

                    </tr>
              </table>
                <br/>
                SATHARA INSTITUTE - SUBJECTS

                <table width="70%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="69%" height="27" align="center" bgcolor="#CCCCCC">Subjects</td>
                        <td width="16%" align="center" bgcolor="#CCCCCC">Edit</td>
                        <td width="15%" align="center" bgcolor="#CCCCCC">Delete</td>
                  </tr>

                    <?php
                    $result = Db::SqlQuery("select* from subjects  where Is_active ='1'");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>

                        <tr>
                            <td height="21" align="left">&nbsp;<?php echo $arry['Subjects'] ?></td>
                          <td align="center" valign="middle"><a href="?id=<?php echo $arry['Subject_id'] ?>">edit</a></td>
                            <td align="center" valign="middle"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['Subject_id'] ?>&ty=3" onclick="return confirm('Are you sure?');">delete</a></td>
                  </tr>

                    <?php } ?>
                    <tr>
                        <td height="45" colspan="3" align="center" valign="middle" bgcolor="#CCCCCC">
                            <form action="logics/addBookGrade.php?id=3" method="post">
                              Add Subjects &nbsp;&nbsp;
                              <input type="text" name="subject" /> &nbsp; <input type="submit" value="Add Subject" /></form>
                        </td>

                    </tr>
              </table>
                
            <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>

        </div>	<!-- Close the container div.............................. -->


        <?php include_once("Parts/footer.php"); ?>


    </body>
</html>

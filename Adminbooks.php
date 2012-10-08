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
                <p>Add new book/Magazine</p>
                <form action="logics/CreateNewBook.php" method="post" enctype="multipart/form-data" >
                    <table width="70%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="24%" height="31">&nbsp;</td>
                          <td width="21%">&nbsp;</td>
                            <td width="4%">&nbsp;</td>
                            <td width="2%">&nbsp;</td>
                            <td width="38%" align="right"><input type="button" name="advanced" value="Advanced Options" /></td>
                            <td width="11%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="35">&nbsp;</td>
                            <td>Title</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td>
                                <input name="title" type="text" size="30" />


                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="34">&nbsp;</td>
                            <td>Grade</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td>

                                <?php
                                $result = Db::SqlQuery("select* from book_grade where is_active = '1' ");
                                ?>

                                <select name="grade" >
                                    <?php
                                    while ($arry = mysql_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $arry['Book_grade_id'] ?>"><?php echo $arry['Book_grade'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                            <td>Image</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td>
                                <input name="imagefile" type="file" id="imagefile" />
                          </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="35">&nbsp;</td>
                            <td>Price</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td><input name="price" type="text" id="price" value="0" size="15" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="32">&nbsp;</td>
                            <td>Description</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td><textarea name="description" cols="50" rows="13" id="description"  ></textarea>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                            <td>book or magazine</td>
                            <td align="center" valign="middle">:-</td>
                            <td>&nbsp;</td>
                            <td><select name="booktype">
                                    <option value="mag">Magazine</option>
                                    <option value="bok">Book</option>
                                </select></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="51">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right"><input type="submit" value="Add new book"  style="margin-right:20px;" /></td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>
                <p>Books</p>
                <table width="75%" border="1" cellspacing="0" cellpadding="0" style="margin-top:10px">
                    <tr>
                        <td width="12%" align="center" bgcolor="#CCCCCC">Book Title</td>
                        <td width="18%" align="center" bgcolor="#CCCCCC">Book Grade</td>
                        <td width="13%" align="center" bgcolor="#CCCCCC">Price</td>
                        <td width="17%" align="center" bgcolor="#CCCCCC">Type</td>
                        <td width="4%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>
                        <td width="6%"  align="center" bgcolor="#CCCCCC">&nbsp;</td>      
                    </tr>

                    <?php
                    $result = Db::SqlQuery("select* from book left join book_grade on book.Book_ID = book_grade.Book_grade_id  order by mag_or_bok  ");
                    while ($arry = mysql_fetch_array($result)) {
                        ?>
                        <tr>  
                            <td height="21" align="left" valign="middle"><?php echo $arry['Book_title'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['Book_grade'] ?></td>
                            <td align="center" valign="middle"><?php echo $arry['Price'] ?></td>
                            <td align="left" valign="middle"><?php echo $arry['mag_or_bok'] ?></td>     
                            <td align="center" valign="middle"><a href="?id=<?php echo $arry['Book_ID'] ?>">Edit</a></td>
                            <td align="center"><a href="logics/DeleteOrInactivate.php?id=<?php echo $arry['Book_ID'] ?>&ty=4&img=<?php echo $arry['image'] ?>" onclick="return confirm('Are you sure?');">delete</a></td>                       	
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

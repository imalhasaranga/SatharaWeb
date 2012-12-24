<?php 
session_start();

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
          <p>UPLOAD  PDF FILES OF TIMETABLES</p>
          
          <form action="logics/UploadPDF.php" method="post" enctype="multipart/form-data">
          
          <table width="451" height="254" border="0" cellpadding="0" cellspacing="0">
<tr>
                <td width="14" height="58">&nbsp;</td>
        <td width="78">&nbsp;</td>
                <td width="116">&nbsp;</td>
                <td width="10">&nbsp;</td>
                <td width="221">&nbsp;</td>
              </tr>
              <tr>
                <td height="49" bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">Day</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC"><select name="day">
                  <option >Sunday</option>
                  <option >Monday</option>
                  <option >Tuesday</option>
                  <option >Wednesday</option>
                  <option >Thursday</option>
                  <option >Friday</option>
                  <option >Saturday</option>
                </select></td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">UploadFile</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC"><input  type="file"  name="pdffile"/></td>
              </tr>
              <tr>
                <td height="38" bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td align="right" bgcolor="#CCCCCC"><p>
                  <input type="submit" value="Submit" style="margin-right:4%"/>
                </p></td>
              </tr>
              <tr>
                <td colspan="5" align="center"></td>
               
                
                
              </tr>
              <tr>
                <td colspan="5" align="center"></td>
              </tr>
              <tr>
                <td height="53" colspan="5" align="center" bgcolor="#E2E2E2">
                <?php 
				if(isset($_SESSION["result"])){
					echo $_SESSION["result"];
					}
				
				?>
                
                </td>
            </tr>
            </table>
            </form>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          </div>

        </div>	<!-- Close the container div.............................. -->


        <?php include_once("Parts/footer.php"); ?>


    </body>
</html>

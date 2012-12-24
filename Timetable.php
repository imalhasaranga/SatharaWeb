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

        <div id="container" align="center" >


            	<!-- Close the content div.............................. -->

          <?php if($_GET["id"] == 1){ ?>

                <object data="TimeTablePDF/Sunday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Sunday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 2){ ?>

                <object data="TimeTablePDF/Monday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Monday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 3){ ?>

                <object data="TimeTablePDF/Tuesday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Tuesday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 4){ ?>

                <object data="TimeTablePDF/Wednesday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Wednesday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 5){ ?>

                <object data="TimeTablePDF/Thursday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Thursday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 6){ ?>

                <object data="TimeTablePDF/Friday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Friday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
                <?php if($_GET["id"] == 7){ ?>

                <object data="TimeTablePDF/Saturday.pdf" type="application/pdf" width="100%" height="100%" hspace="1" vspace="1">
                    <p>It appears you don't have a PDF plugin for this browser.
                        <br/>
                        <a href="Saturday.pdf">click here to download the PDF file.</a>
                    </p>
                </object>

           <?php } ?>
               
                

        </div>	<!-- Close the container div.............................. -->


        <?php include_once("Parts/footer.php"); ?>


    </body>
</html>

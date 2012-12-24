<?php
include_once 'logics/newfunctions.php';
include_once 'logics/Db.php';
?>


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
        <script type="text/javascript" src="Jquery/js/jquery-1.6.2.min.js"></script>
        <link href="Styles/ssmain.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/sspublishers.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/leftmenu.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="scripts/leftmenu.js"></script>


        <script type="text/javascript" src="jquery.nivo.slider.js"></script>


        <link rel="stylesheet" href="Jquery/ui-lightness/jquery-ui-1.8.16.custom.css" />
        <script src="Jquery/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript" ></script>
        <script type="text/javascript">
        
        
            
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
    
    
            
    
            function showcontent(id){
                document.getElementById("dialog-modal").title = "";
                var im= document.getElementById("xy");
                var par = document.getElementById("content1");
                par.innerHTML = document.getElementById(id).value;
                
                
                im.src = document.getElementById(id+'I').src;
                
                $( "#dialog-modal" ).dialog({
                    width:700, height:400, title :document.getElementById(id+'T').innerHTML,
                    modal: true
                });
      
            }
        </script>

    </head>

    <body>


        <?php include_once("Parts/top_header.php"); ?>

        <div id="container" align="center">
            <!-- main -->
            <?php include_once("Parts/galary.php"); ?>

            <div id="content" align="center">
                <div id="content_left">

                    <?php include_once("Parts/LeftOFpublishers.php"); ?>
                    <br/>
                    <a href="#"><img src="images/latestmag.jpg" width="220" height="260" border="0" /></a>


                </div>

                <div id="content_right">

                    <div id="content_right_products">
                        <span id="pub_title"><?php
                    $result = Db::SqlQuery("SELECT book_grade FROM book_grade WHERE Book_grade_id = '{$_GET["id"]}'");
                    $arry = mysql_fetch_array($result);
                    $category = '';
                    if ($_GET["type"] == 'bok') {
                        $category = 'Books';
                    } else if ($_GET["type"] == 'mag') {
                        $category = 'Magazines';
                    }
                    echo $arry["book_grade"] . ' ' . $category;
                    ?></span><br/><br/>


                        <?php
                        $result = Db::SqlQuery("select* from book where show_type != 'inactive' && book_grade ='{$_GET["id"]}' && mag_or_bok ='{$_GET["type"]}'  ");
                        while ($arry = mysql_fetch_array($result)) {
                            ?>
                            <div class="productshow">
                                <div class="protitle" id="<?php echo ($arry["Book_ID"]) . "T" ?>" >
                                    <?php echo $arry["Book_title"]." " ?>
                                </div>
                                <div class="prpimage">
                                    <a href="#" onclick="showcontent('<?php echo $arry["Book_ID"] ?>');"><img src="<?php echo $arry["image"] ?>" id="<?php echo ($arry["Book_ID"]) . "I" ?>"  border="0" width="220" height="180" /></a>
                                </div>
                                <div class="proprice">
                                    Rs. <?php echo $arry["Price"] ?>
                                </div>
                                <input type="hidden" id="<?php echo $arry["Book_ID"] ?>" value="<?php echo $arry["Description"] ?>" />
                            </div>

                        <?php } ?>



                    </div> 
                </div>  

            </div>	<!-- Close the content div.............................. -->

            <div id="push"></div>

        </div>	<!-- Close the container div.............................. -->
        <?php include_once("Parts/footer.php"); ?>

        <div id="dialog-modal"  >
            <img src="" id="xy" width="290px" height="290px" alt="abc" style="float:left" vspace="10" hspace="10" />
            <p id="content1"></p>
        </div>


    </body>
</html>

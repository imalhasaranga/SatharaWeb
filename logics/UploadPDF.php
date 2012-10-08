<?php
session_start();
$pdfname = $_POST["day"];
include_once 'newfunctions.php';

if (($_FILES["pdffile"]["type"] == "application/pdf")) {
  
    $fh = fopen($pdfname.".pdf", 'w') or die("can't open file");
    fclose($fh);
    unlink($pdfname.".pdf");

    $pdfname = $_FILES["pdffile"]["name"] = $pdfname.".pdf";
    move_uploaded_file($_FILES["pdffile"]["tmp_name"], "../TimeTablePDF/" . $pdfname);

    $_SESSION["result"] = "Uploaded";
} else {
    $_SESSION["result"] = "File format wrong";
}


redirect("../AdminPDFTimetable.php")
?>

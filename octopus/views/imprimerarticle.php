<?php

include "C:/wamp64/www/octopus/entities/Article.php";
require_once ('C:/wamp64/www/octopus/views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des article: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'source_projet2a');

$query  = "SELECT * FROM article ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"avatar",1,0);
  $pdf->Cell(30,10,"description",1,0);
  $pdf->Cell(25,10,"type",1,0);
  $pdf->Cell(40,10,"date",1,0);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $avatar = $row['avatar'];
        $description = $row['description'];
        $type = $row['type'];
        $date=$row['date'];

        if($e==0)
        {

        $pdf->Cell(24,10,"{$avatar} ",1,0);
        $pdf->Cell(30,10,"{$description} ",1,0);
        $pdf->Cell(25,10,"{$type} ",1,0);
        $pdf->Cell(40,10,"{$date} ",1,0);

        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("article.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=article.pdf");
readfile("article.pdf");
unlink("article.pdf");

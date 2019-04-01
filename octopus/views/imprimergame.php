<?php
include "C:/wamp64/www/octopus/entities/game.php";
require_once ('C:/wamp64/www/octopus/views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n List OF GAMES: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'source_projet2a');

$query  = "SELECT * FROM game ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"name",1,0);
  $pdf->Cell(30,10,"description",1,0);
  $pdf->Cell(25,10,"rating",1,0);



    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $name = $row['name'];
        $description = $row['description'];
        $rating = $row['rating'];


        if($e==0)
        {

        $pdf->Cell(24,10,"{$name} ",2,1);
        $pdf->Cell(30,10,"{$description} ",2,1);
        $pdf->Cell(25,10,"{$rating} ",2,1);

        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("game.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=game.pdf");
readfile("game.pdf");
unlink("game.pdf");

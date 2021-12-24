<?php

require('../phpfpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Daftar List Resep',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(10,6,'ID',1,0,'C');
$pdf->Cell(50,6,'Nama Resep',1,0,'C');
$pdf->Cell(55,6,'Asal Daaerah',1,0,'C');
$pdf->Cell(40,6,'Link HTML',1,0,'C');
$pdf->Cell(40,6,'Link PHP',1,1,'C');

$pdf->SetFont('Times','',10);

include '../includes/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM makanan ORDER BY id ASC");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(10,6,$data['id'],1,0,'C');
    $pdf->Cell(50,6,$data['makanan'],1,0,);
    $pdf->Cell(55,6,$data['asal'],1,0);
    $pdf->Cell(40,6,$data['link'],1,0);
    $pdf->Cell(40,6,$data['link2'],1,1);
}

$pdf->Output();
?>
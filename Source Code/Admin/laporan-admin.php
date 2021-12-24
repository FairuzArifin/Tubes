<?php

require('../phpfpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Daftar Akun Admin',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(10,6,'ID',1,0,'C');
$pdf->Cell(50,6,'Nama',1,0,'C');
$pdf->Cell(55,6,'Username',1,0,'C');
$pdf->Cell(30,6,'Password',1,0,'C');
$pdf->Cell(50,6,'Email',1,1,'C');

$pdf->SetFont('Times','',10);

include '../includes/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM akun WHERE level='admin' ORDER BY id ASC");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(10,6,$data['id'],1,0,'C');
    $pdf->Cell(50,6,$data['nama'],1,0,);
    $pdf->Cell(55,6,$data['username'],1,0);
    $pdf->Cell(30,6,$data['password'],1,0);
    $pdf->Cell(50,6,$data['email'],1,1);
}

$pdf->Output();
?>
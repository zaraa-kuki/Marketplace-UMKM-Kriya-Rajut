<?php
require('fpdf/fpdf.php');
include('koneksi.php');
class PDF extends FPDF
{
    // Header Kartu
    function Header()
    {
        $this->SetFont('Arial','B',14);
        $this->Cell(0, 10, 'Kartu Peserta', 0, 1, 'C');
        $this->Ln(10);
    }
    // Footer Kartu
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Halaman '.$this->PageNo(),0,0,'C');
    }
}
$pdf = new PDF();
$pdf->AddPage();
// Query data dari database
$query = mysqli_query($koneksi, "SELECT * FROM calon_mhs");
while ($data = mysqli_fetch_assoc($query)) {
    $pdf->SetFont('Arial','',12);
    // Foto peserta dengan rapi
    $currentY = $pdf->GetY();
    if (!empty($data['foto']) && file_exists('uploads/'.$data['foto'])) {
        $pdf->Image('uploads/'.$data['foto'], 10, $currentY, 30, 40);
    } else {
        $pdf->Rect(10, $currentY, 30, 40); // Kotak kosong jika foto tidak ada
    }
    // Tabel detail peserta
    $pdf->SetXY(45, $currentY);
    $pdf->Cell(50,8,'NIS', 1, 0, 'L' );
    $pdf->Cell(100,8, $data['nis'], 1, 1, 'L' );
    $pdf->SetX(45);
    $pdf->Cell(50,8,'Nama', 1, 0, 'L' );
    $pdf->Cell(100,8, $data['nama'], 1, 1, 'L' );
    $pdf->SetX(45);
    $pdf->Cell(50,8,'Jenis Kelamin', 1, 0, 'L' );
    $pdf->Cell(100,8, $data['jk'], 1, 1, 'L' );
    $pdf->SetX(45);
    $pdf->Cell(50,8,'Telepon', 1, 0, 'L' );
    $pdf->Cell(100,8, $data['telepon'], 1, 1, 'L' );
    $pdf->SetX(45);
    $pdf->Cell(50,8,'Alamat', 1, 0, 'L' );
    $pdf->Cell(100,8, $data['alamat'], 1, 1, 'L' );
    $pdf->Ln(50); // Jarak antar kartu
}
// Output ke browser
$pdfOutput = 'kartu_peserta.pdf';
$pdf->Output('F', $pdfOutput);
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $pdfOutput . '"');
readfile($pdfOutput);
unlink($pdfOutput);
exit;
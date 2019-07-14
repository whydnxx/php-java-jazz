<?php
include "db_connect.php";
require('fpdf.php');

$id = $_GET['id'];

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(80,10,'Pembelian Tiket - Java Jazz',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer(){
      // Position at 1.5 cm from bottom
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->Cell(0,10,'Copyright - Tukang Koding ',0,0,'C');
  }
}

$sql = "SELECT booking.id_booking, booking.nama_pembeli, customers.username, customers.email, tickets.jenis_tiket, tickets.harga
FROM booking
INNER JOIN customers ON booking.id_customer = customers.id_customer
INNER JOIN tickets ON booking.id_ticket = tickets.id_ticket
WHERE booking.status = 1 AND booking.id_booking = $id";

$result = $connect->query($sql);
while ($row = $result->fetch_array()) {
  $id_booking = $row[0];
  $nama_pembeli = $row[1];
  $username = $row[2];
  $email = $row[3];
  $jenis_tiket = $row[4];
  $harga = $row[5];
  $qr_code = "https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$row[0].'.png";

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Times','',14);

  $pdf->Cell(1,10,'ID Booking              : ',0,1,'L');
  $pdf->Cell(40,10, $id_booking ,0,1);
  $pdf->Cell(40,10,'Nama Pembeli         : ',0,1,'L');
  $pdf->Cell(40,10, $nama_pembeli ,0,1);
  $pdf->Cell(40,10,'Username                : ',0,1,'L');
  $pdf->Cell(40,10, $username ,0,1);
  $pdf->Cell(40,10,'Jenis Tiket               : ',0,1,'L');
  $pdf->Cell(40,10, $email ,0,1);
  $pdf->Cell(40,10,'Email                       : ',0,1,'L');
  $pdf->Cell(40,10, $jenis_tiket ,0,1);
  $pdf->Cell(40,10,'Harga                       : ',0,1,'L');
  $pdf->Cell(40,10, $harga ,0,1);
  $pdf->Image($qr_code,120,90,60);
  $pdf->Output();
}

// Instanciation of inherited class

?>

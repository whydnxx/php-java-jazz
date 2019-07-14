<?php

require_once 'core.php';

$sql = "SELECT booking.id_booking, booking.nama_pembeli, customers.username, customers.email, tickets.jenis_tiket, tickets.harga
FROM booking
INNER JOIN customers ON booking.id_customer = customers.id_customer
INNER JOIN tickets ON booking.id_ticket = tickets.id_ticket
WHERE booking.status = 1
ORDER BY booking.id_booking DESC
";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

 while($row = $result->fetch_array()) {
 	$IDbooking = $row[0];

 	$button = '<!-- Single button -->
  <div class="dropdown">
    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action <span class="caret"></span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item" href="php_action/printPesanan.php?id='.$IDbooking.'""> <i class="fa fa-print"></i> Print Pesanan</a>
     <button class="dropdown-item" data-toggle="modal" data-target="#deletePesananBooked" data-href="php_action/deleteTicketBooked.php?id='.$IDbooking.'"> <i class="fa fa-fw fa-trash"></i> Hapus</button>
   </div>
  </div>';

  $qr_code = '<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$row[0].'" alt="">';

 	$output['data'][] = array(
 		$row[0],
 		$row[1],
    $row[2],
    $row[3],
    $row[4],
 		$row[5],
    $qr_code,
 		$button
 		);
 } // /while

} // if num_rows

$connect->close();

echo json_encode($output);

<?php

$fetchMessageSql = "SELECT COUNT(id_message) FROM messages";
$resultMessageQuery = $connect->query($fetchMessageSql);

if ($resultMessageQuery->num_rows == 1) {
  if ($rowMessage = $resultMessageQuery->fetch_array()) {
    $jumlahMessage = $rowMessage['0'];
  }
}

$fetchTicketSql = "SELECT SUM(stock) FROM tickets";
$resultTicketQuery = $connect->query($fetchTicketSql);

if ($resultTicketQuery->num_rows == 1) {
  if ($rowTicket = $resultTicketQuery->fetch_array()) {
    $jumlahTicket = $rowTicket['0'];
  }
}

$fethcBookingSql = "SELECT COUNT(status) FROM booking WHERE status = 0";
$resultBookingQuery = $connect->query($fethcBookingSql);

if ($resultBookingQuery->num_rows == 1) {
  if ($rowBooking = $resultBookingQuery->fetch_array()) {
    $jumlahBooking = $rowBooking['0'];
  }
}

$fetchBookedSql = "SELECT COUNT(status) FROM booking WHERE status = 1";
$resultBookedQuery = $connect->query($fetchBookedSql);

if ($resultBookedQuery->num_rows == 1) {
  if ($rowBooked = $resultBookedQuery->fetch_array()) {
    $jumlahBooked = $rowBooked['0'];
  }
}

$fetchBookedSql = "SELECT COUNT(status) FROM booking WHERE status = 1";
$resultBookedQuery = $connect->query($fetchBookedSql);

if ($resultBookedQuery->num_rows == 1) {
  if ($rowBooked = $resultBookedQuery->fetch_array()) {
    $jumlahBooked = $rowBooked['0'];
  }
}


$fetchSoldSql = "SELECT COUNT(id_booking) FROM booking WHERE status = 1";
$resultSoldQuery = $connect->query($fetchSoldSql);

if ($resultSoldQuery->num_rows == 1) {
  if ($rowSold = $resultSoldQuery->fetch_array()) {
    $jumlahSold = $rowSold['0'];
  }
}

$fetchPendapatanSql = "SELECT SUM(tickets.harga)
FROM booking
INNER JOIN customers ON booking.id_customer = customers.id_customer
INNER JOIN tickets ON booking.id_ticket = tickets.id_ticket
WHERE booking.status = 1";
$resultPendapatanQuery = $connect->query($fetchPendapatanSql);

if ($resultPendapatanQuery->num_rows == 1) {
  if ($rowPendapatan = $resultPendapatanQuery->fetch_array()) {
    $jumlahPendapatan = $rowPendapatan['0'];
  }
}

 ?>

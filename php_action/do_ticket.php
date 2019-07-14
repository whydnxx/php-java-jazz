<?php
if (isset($_POST['ticketBtn'])) {
  $IDcustomer = $_SESSION['id_customer'];
  $nama_pembeli = $_POST['nama_pembeli'];
  $jenis_tiket = $_POST['jenis_tiket'];
  $email_pembeli = $_POST['email_pembeli'];

  $countTicket = "SELECT id_customer FROM booking WHERE id_customer = '$IDcustomer'";
  $countTicketQuery = mysqli_query($connect, $countTicket);

  if (mysqli_num_rows($countTicketQuery) > 2) {
    echo '<script>alert ("Maaf, satu username hanya membeli maksimal 3 tiket")</script>';
  }
  else {
    $cekTicket = "UPDATE tickets SET stock = stock -1 WHERE id_ticket = '$jenis_tiket'";
    $cekQuery = $connect->query($cekTicket);

    if ($cekQuery == TRUE) {
      $ticketSql = "INSERT INTO booking(id_customer, id_ticket, nama_pembeli, status) VALUES('$IDcustomer', '$jenis_tiket', '$nama_pembeli', '0')";
      $ticketQuery = $connect->query($ticketSql);

      if ($ticketQuery == TRUE) {
        echo '<script>alert ("Ticket Berhasil di pesan, mohon check email anda")</script>';
      }
      else {
        echo '<script>alert ("Ticket Gagal Dipesan, Coba Lagi")</script>';
      }
    }
    else {
      echo '<script>alert ("Error")</script>';
    }
  }
}

?>

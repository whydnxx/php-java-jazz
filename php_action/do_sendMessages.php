<?php
if (isset($_POST['btnMessages'])) {

  $nameMessage = $_POST['nameMessages'];
  $emailMessage = $_POST['emailMessages'];
  $messageMessage = $_POST['messageMessages'];

  $sqlMessage = "INSERT INTO messages(nama_pengirim, email, pesan) VALUES('$nameMessage','$emailMessage','$messageMessage')";
  $queryMessage = $connect->query($sqlMessage);

  if ($queryMessage == TRUE) {
    echo '<script>alert ("Pesan Berhasil Terkirim")</script>';
  }
  else {
    echo '<script>alert ("Pesan Gagal Terkirim")</script>';
  }
}



 ?>

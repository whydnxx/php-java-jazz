<?php

require_once 'db_connect.php';

$id = $_GET['id'];

$sql = "UPDATE booking SET status = 1 WHERE id_booking = $id";

if ($connect->query($sql) === TRUE) {
  echo '<script> alert("Data berhasil ditambahkan"); window.location.replace("http://localhost/java_jazz/admin/booking.php");</script>';
}
else {
  echo '<script> alert("Error"); window.location.replace("http://localhost/java_jazz/admin/booking.php");</script>';
}

$connect->close();
 ?>

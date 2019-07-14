<?php

require_once 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM booking WHERE id_booking = $id";

if ($connect->query($sql) === TRUE) {
  echo '<script> alert("Data berhasil dihapus"); window.location.replace("http://localhost/java_jazz/admin/booked.php");</script>';
}
else {
  echo '<script> alert("Error"); window.location.replace("http://localhost/java_jazz/admin/booked.php");</script>';
}

$connect->close();
 ?>

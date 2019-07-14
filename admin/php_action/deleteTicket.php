<?php

require_once 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM tickets WHERE id_ticket = $id";

if ($connect->query($sql) === TRUE) {
  echo '<script> alert("Ticket berhasil dihapus"); window.location.replace("http://localhost/java_jazz/admin/ticket.php");</script>';
}
else {
  echo '<script> alert("Error"); window.location.replace("http://localhost/java_jazz/admin/ticket.php");</script>';
}

$connect->close();
 ?>

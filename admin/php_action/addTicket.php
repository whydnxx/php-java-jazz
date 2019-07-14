<?php

require_once 'core.php';

$success = array();
$errors = array();

if(isset($_POST['addTicket'])) {

	$jenis_tiket = $_POST['jenis_tiket'];
  $harga_tiket = $_POST['harga_tiket'];
  $stock_tiket = $_POST['stock_tiket'];

	$checkdata = mysqli_query($connect, "SELECT jenis_tiket FROM tickets WHERE jenis_tiket='$jenis_tiket' ");
  if (mysqli_num_rows($checkdata) > 0) {
    $errors[] = "Category Already Exist";
  }
	else {
		$sql = "INSERT INTO tickets (jenis_tiket, harga, stock) VALUES ('$jenis_tiket', '$harga_tiket', $stock_tiket)";

		if($connect->query($sql) === TRUE) {
			$success[] = "Successfully Added";
		} else {
		 	$errors[] = "Error while adding the members";
		}
	}

	$connect->close();

} // /if $_POST
?>

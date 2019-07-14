<?php
require_once 'core.php';

$output = '';
	if(isset($_POST["query"])){
		$search = mysqli_real_escape_string($connect, $_POST["query"]);
		$query = "SELECT booking.id_booking, booking.nama_pembeli, customers.username, customers.email, tickets.jenis_tiket, tickets.harga
    FROM booking
    INNER JOIN customers ON booking.id_customer = customers.id_customer
    INNER JOIN tickets ON booking.id_ticket = tickets.id_ticket
    WHERE booking.status = 1 AND booking.id_booking LIKE '%".$search."%'
		";

		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0){
			if($row = mysqli_fetch_array($result)){
        $output .= '
          <div class="form-group">
            <label for="">Nama Pembeli</label>
            <input class="form-control" type="text" name="nama" value="'.$row[1].'" readonly>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" value="'.$row[2].'" readonly>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" value="'.$row[3].'" readonly>
          </div>
          <div class="form-group">
            <label for="">Jenis Tiket</label>
            <input class="form-control" type="text" name="jenis_tiket" value="'.$row[4].'" readonly>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input class="form-control" type="text" name="harga" value="'.$row[5].'" readonly>
          </div>
          <div class="pull-right">
          <a href="http://localhost/java_jazz/admin/scann.php" class="btn btn-lg btn-outline-success">Oke</a>
          </div>
        ';
			}
			echo $output;
		}
		else
		{
			echo '<h1>Data Belum Dikonfirmasi, <a href="booking.php">Check</a></h1>';
		}
	}
  else {
    echo '<h1>Mencari Data . . .</h1>';
  }

 ?>

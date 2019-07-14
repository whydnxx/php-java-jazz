<?php

session_start();

if(isset($_POST['loginBtn'])) {

	$username = $_POST['usernameLogin'];
	$password = $_POST['passwordLogin'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			echo '<script>alert ("Username dibutuhkan")</script>';
		}

		if($password == "") {
			echo '<script>alert ("Password dibutuhkan")</script>';
		}
	}
	else {
		$sql = "SELECT * FROM customers WHERE username = '$username'";
		$result = $connect->query($sql);

		if($result->num_rows == 1) {
			// exists
			$mainSql = "SELECT * FROM customers WHERE username = '$username' AND password = MD5('$password')";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$customer = $value['nama_customer'];
				$id = $value['id_customer'];
				$username = $value['username'];

				// set session
				$_SESSION['id_customer'] = $id;
				$_SESSION['nama_customer'] = $customer;
				$_SESSION['username'] = $username;
			}
			else{
				echo '<script>alert ("Username/ Password salah")</script>';
			} // /else
		}
		else {
			echo '<script>alert ("Username belum terdaftar, mohon untuk mendaftar")</script>';
		} // /else
	} // /else not empty username // password

} // /if $_POST
?>

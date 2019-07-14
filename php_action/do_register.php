<?php

if (isset($_POST['registerBtn'])) {
  $namaRegister = $_POST['namaRegister'];
  $usernameRegister = $_POST['usernameRegister'];
  $confirm_passwordRegister = $_POST['confirm_passwordRegister'];
  $emailRegister = $_POST['emailRegister'];
  $noHpRegister = $_POST['noHpRegister'];

  $checkdata = mysqli_query($connect, "SELECT username FROM customers WHERE username='$username' ");
  if (mysqli_num_rows($checkdata) > 0) {
    echo '<script>alert ("Data sudah ada, mohon coba yang lain")</script>';
  }
  else {
    $result = mysqli_query($connect, "INSERT INTO customers (nama_customer, username, password, email, no_hp) VALUES('$namaRegister', '$usernameRegister', MD5('$confirm_passwordRegister') ,'$emailRegister', '$noHpRegister')");
  }
  echo '<script>alert ("Kamu berhasil terdaftar")</script>';
}

 ?>

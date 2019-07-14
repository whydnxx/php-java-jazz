<?php

session_start();
include_once 'db_connect.php';

if (empty($_SESSION['id_user'])) {
  header ("location: http://localhost/java_jazz/admin/index.php");
}

 ?>

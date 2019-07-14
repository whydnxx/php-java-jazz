<?php
session_start();

session_unset();
session_destroy();

header('location: http://localhost/java_jazz/admin/index.php');

 ?>

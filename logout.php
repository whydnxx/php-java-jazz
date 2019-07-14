<?php

session_start();

session_unset();

// destroy the session
session_destroy();

header('location: http://localhost/java_jazz/index.php');

 ?>

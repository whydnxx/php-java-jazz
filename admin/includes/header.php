<?php
require_once 'php_action/db_connect.php';
require_once 'php_action/core.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Java Jazz | Admin Panel</title>
    <!-- Bootstrap core CSS-->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../assets/custom/custom.css" rel="stylesheet">
    <link href="../assets/custom/fpdf.css" rel="stylesheet">
  </head>
  <body class="fixed-nav sticky-footer bg-dark">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.html">Java Jazz | Admin Panel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
            <a class="nav-link" href="message.php">
              <i class="fa fa-fw fa-comments"></i>
              <span class="nav-link-text">Messages</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseOrders" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-shopping-cart"></i>
              <span class="nav-link-text">Orders</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseOrders">
              <li>
                <a href="booking.php"><i class="fa fa-fw fa-cart-plus"></i> Booking</a>
              </li>
              <li>
                <a href="booked.php"><i class="fa fa-cart-arrow-down fa-fw"></i> Booked</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ticket">
            <a class="nav-link" href="ticket.php">
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">Tickets</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ticket">
            <a class="nav-link" href="scann.php">
              <i class="fa fa-fw fa-qrcode "></i>
              <span class="nav-link-text">Scan Ticket</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>

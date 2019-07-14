<?php require_once 'includes/header.php'; ?>
<?php
include_once 'php_action/fetchDashboard.php';
 ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-comments"></i>
            </div>
            <div class="mr-5"><?php echo $jumlahMessage; ?> Total Pesan</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="message.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5"><?php echo $jumlahBooking; ?> Orders!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="booking.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5"><?php echo $jumlahBooked; ?> Ordered</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="booked.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-support"></i>
            </div>
            <div class="mr-5"><?php echo $jumlahTicket ?> Tickets Tersedia</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="ticket.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
      <!-- Example Bar Chart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> Total Pendapatan</div>
        <div class="card-body">
          <hr>
          <div class="row">
            <div class="col-sm-6 text-center my-auto">
              <div class="h4 text-primary"><?php echo $jumlahSold; ?></div>
              <div class="small text-muted">Tiket Terjual</div>
            </div>
            <div class="col-sm-6 text-center my-auto">
              <div class="h4 text-warning"><?php
              if ($jumlahPendapatan == 0) {
                echo "Tidak ada pendapatan";
              }
              else {
                echo "Rp.$jumlahPendapatan";
              }
              ?></div>
              <div class="small text-muted">Uang yang didapat</div>
            </div>
            <!-- <div class="col-sm-4 text-center my-auto">
              <div class="h4 text-success">5</div>
              <div class="small text-muted">Tiket Terjual</div>
            </div> -->
          </div>
          <hr>
        </div>
        <div class="card-footer small text-muted">Updated <?php  ?></div>
      </div>
        <!-- Card Columns Example Social Feed-->
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>

<?php require_once 'includes/footer.php'; ?>

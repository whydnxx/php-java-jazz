<?php require_once 'includes/header.php';
require_once 'php_action/addTicket.php';
?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="dashboard.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tickets</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Tickets</div>
      <div class="card-body">
        <div class="messages">
          <?php
            if ($errors) {
              foreach ($errors as $key => $value) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <i class="fa fa-exclamation-triangle fa-fw"></i>   '.$value.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              }
            }
            if ($success) {
              foreach ($success as $key => $value) {
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="fa fa-check fa-fw"></i>   '.$value.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
              }
            }
          ?>
        </div>
        <div class="div-action pull pull-right" style="padding-bottom:20px;">
          <button class="btn btn-outline-dark" data-toggle="modal" data-target="#addCategories"> <i class="fa fa-plus fa-fw"></i>Tambah Tiket</button>
        </div> <!-- /div-action -->
        <div class="table-responsive">
          <table class="table table-bordered" id="manageTicketTables" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Ticket</th>
                <th>Jenis Tiket</th>
                <th>Harga</th>
                <th>Jumlah Tiket</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

</div>

<div class="modal fade" id="addCategories" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="ticket.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fa fa-plus fa-fw"></i>Add Categoriess</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="jenis_tiket" placeholder="Jenis Tiket" autocomplete="off" required>
          </div>
          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rp.</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" name="harga_tiket" placeholder="Harga Tiket" autocomplete="off" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="stock_tiket" placeholder="Stock Ticket" autocomplete="off" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-dark" name="addTicket" autocomplete="off">Save changes</button>
        </div>
      </form>
    </div>
  </div>
 </div>

<div class="modal fade" tabindex="-1" role="dialog" id="deleteTicket">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-fw fa-trash"></i> Hapus Pesanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Apakah ticket ini akan dihapus ?</p>
      </div>
      <div class="modal-footer confirmPesananFooter">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"> <i class="fa fa-fw fa-times"></i> Tutup</button>
        <a class="btn btn-outline-dark btn-delete"> <i class="fa fa-fw fa-check"></i> Iya</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?php require_once 'includes/footer.php'; ?>

<?php require_once 'includes/header.php'; ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="dashboard.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Booked</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="manageBookedTables" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pembeli</th>
                <th>Username</th>
                <th>Email</th>
                <th>Jenis Tiket</th>
                <th>Harga</th>
                <th>Qr - Code</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="deletePesananBooked">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><i class="fa fa-fw fa-trash"></i> Hapus Pesanan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>Apakah pesanan ini akan dihapus ?</p>
        </div>
        <div class="modal-footer confirmPesananFooter">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal"> <i class="fa fa-fw fa-times"></i> Tutup</button>
          <a class="btn btn-outline-dark btn-delete"> <i class="fa fa-fw fa-check"></i> Iya</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div>

<?php require_once 'includes/footer.php'; ?>

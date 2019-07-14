<?php require_once 'includes/header.php'; ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="dashboard.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Messages</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example</div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-8">
            <h1>Result</h1>
            <div class="form-group">
              <label for="">No Peserta</label>
              <textarea class="form-control" name="searchQr" id="searchQr" rows="1" cols="1" style="resize: none" readonly></textarea>
            </div>
            <div id="result"></div> 
          </div>
          <div class="col-sm-4">
            <h2>scann</h2>
            <div id="reader" style="width:350px;height:350px;"></div>
          </div>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

</div>

<?php require_once 'includes/footer.php'; ?>

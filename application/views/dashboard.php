<!doctype html>
<html lang="en">

  <!-- HEAD -->
    <?php $this->load->view("layouts/head.php") ?>
  <!-- /HEAD -->
  
<body>

  <!-- NAVBAR -->
    <?php $this->load->view("layouts/navbar.php") ?>
  <!-- /NAVBAR -->

<div class="container-fluid">
  <div class="row">
    <!-- SIDEBAR -->
      <?php $this->load->view("layouts/sidebar.php") ?>
    <!-- /SIDEBAR -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <div class="row">
        
        <div class="col">
          <div class="card">
            <img src="<?php echo base_url('assets/img-dir/add2.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Add new data.</p>
                <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-outline-secondary">Continue</a>
          </div>          
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo base_url('assets/img-dir/update2.png'); ?>" class="card-img-top" alt="knawhy">
            <div class="card-body">
              <p class="card-text">Update data you need.</p>
                <button type="button" class="btn btn-sm btn-outline-secondary">Continue</button>
          </div>          
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo base_url('assets/img-dir/read2.jpg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Check data here.</p>
                <button type="button" class="btn btn-sm btn-outline-secondary">Continue</button>
          </div>          
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo base_url('assets/img-dir/delete.jpg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Choose to delete data.</p>
                <button type="button" class="btn btn-sm btn-outline-secondary">Continue</button>
          </div>          
          </div>
        </div>
      </div>

   
    </main>
  </div>
  </div>

  
 
  <!-- JS -->
    <?php $this->load->view("layouts/js.php") ?>
  <!-- /JS -->

  </body>

</html>

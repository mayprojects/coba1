<!doctype html>
<html lang="en">

<!-- head -->
  <?php $this->load->view("layouts/head.php") ?>
<!-- /.head -->
  
<body>

  <!-- navbar -->
    <?php $this->load->view("layouts/navbar.php") ?>
  <!-- /.navbar -->

<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
      <?php $this->load->view("layouts/sidebar.php") ?>
    <!-- /.sidebar -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- /card -->
      <div class="card-body">
        <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Data</h3>
        </div>
        
        <?php echo $this->session->flashdata('failed'); ?>

        <!-- form  -->
         <div class="modal-body">
            <form role="form" action="<?=base_url('dashboard/edit_data/').$data_petugas['id_petugas'] ?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="col">

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?=$data_petugas['nama_petugas']?>" readonly>
                </div>
                 
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?=$data_petugas['tgl_lahir']?>" readonly>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                 <input type="text" class="form-control" name="jk" id="jk" value="<?=$data_petugas['jk']?>" readonly>
                </div>

                <div class="form-group">
                  <label for="agama">Agama</label>
                  <input type="text" class="form-control" name="agama" value="<?=$data_petugas['agama']?>" id="agama" readonly>
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" readonly><?=$data_petugas['alamat']?></textarea>
                </div>

                <div class="form-group">
                  <label for="tgl_lahir">No Telepon</label>
                  <input type="text" class="form-control" name="no_tlp" value="<?=$data_petugas['no_tlp']?>" id="tgl_lahir" readonly>
                </div>

                

              </div>

              <div class="col">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?=$data_petugas['username']?>" readonly>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password"  readonly>
                </div>
                 <div class="form-group">
                  <label for="password">Retype Password</label>
                  <input type="password" class="form-control" id="password" name="confirm_pass"  readonly>
                </div>
                <div class="form-group">
                  <label for="level">Hak Akses</label>
                  <input type="text" class="form-control" name="level" id="level" value="<?=$data_petugas['level']?>" readonly>
                </div>

                <p style="color: red">*Isi data untuk akses halaman</p>
              </div>

            </div>

        <div class="card-footer">
          <a href="<?=base_url('dashboard/tampil')?>" class="btn btn-secondary" role="button">Kembali</a>
        </div>
      </form>
    
    </div>
    <!-- /.form  -->

      </div>
    </div>  

    </main>

    </div>
</div>

  <!-- js -->
    <?php $this->load->view("layouts/js.php") ?>
  <!-- /.js -->

</body>
</html>

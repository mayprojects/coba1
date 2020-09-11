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
            <form role="form" action="<?=base_url('dashboard/tambah_data')?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="col">

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required>
                </div>
                 
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk" required>
                    <option value=""></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" name="agama" required>
                    <option value=""></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Lain">Kepercayaan lain</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>

                <div class="form-group">
                  <label for="tgl_lahir">No Telepon</label>
                  <input type="text" class="form-control" name="no_tlp" id="tgl_lahir" required>
                </div>

                <div class="form-group">
                  <label for="foto">Upload Foto:</label>
                  <div class="input-group">
                    <div class="custom-file">
                       <input type="file" id="foto" name="foto" required>
                    </div>
                 </div>
                </div>

              </div>

              <div class="col">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                 <div class="form-group">
                  <label for="password">Retype Password</label>
                  <input type="password" class="form-control" id="password" name="confirm_pass" required>
                </div>
                <div class="form-group">
                  <label for="level">Hak Akses</label>
                  <select class="form-control" name="level" required>
                    <option value=""></option>
                    <option value="Admin">Owner</option>
                    <option value="Owner">Admin</option>
                  </select>
                </div>

                <p style="color: red">*Isi data untuk akses halaman</p>
              </div>

            </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    
    </div>
    <!-- /.form  -->

      </div>
    </div>  

    </main>

    </div>
</div>

</body>
</html>

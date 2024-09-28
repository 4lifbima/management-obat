
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h2"><b>Pengelolahan</b> OBAT</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Login Menggunakan Username dan Password Anda!</p>

      <form action="<?php echo base_url(); ?>index.php/auth/ceklogin" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="input-group mb-3">
            <select class="form-control" name="level">
                <option selected disabled>--Level User--</option>
                <option value="admin">Admin</option>
                <option value="pemilik">Pemilik</option>
                <option value="suplier">Suplier</option>
            </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-users"></span>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


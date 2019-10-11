<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    <form action="database/insertreg.php" method="post" enctype="multipart/form-data">
      <p class="login-box-msg">Register a new membership</p>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
          </div>
          <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
          </div>
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
          </div>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          </div>
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
      </div>

      <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="form-check">
         <input class="form-check-input" type="radio" name="jkelamin" value="Laki-laki">
         <label class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check">
         <input class="form-check-input" type="radio" name="jkelamin" value="Perempuan">
         <label class="form-check-label">Perempuan</label>
        </div>
      </div>

      <div class="form-group">
        <label>Tanggal Lahir</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
          </div>
          <input type="date" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" placeholder="Tanggal Lahir" data-mask>
        </div>
      </div>

      <div class="form-group">
        <select name="agama" class="form-control select2" style="width: 100%;">
          <option selected="selected" disabled>Agama</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Budha</option>
        </select>
      </div>

      <div class="form-group">
        <label>Hobi</label><br>
        <label>
          <input type="checkbox" name="hobi1" value="Memancing" class="minimal"> Memancing
        </label><br>
        <label>
          <input type="checkbox" name="hobi2" value="Sepeda" class="minimal"> Bersepeda
        </label><br>
        <label>
          <input type="checkbox" name="hobi3" value="Nonton" class="minimal"> Nonton
        </label>
      </div>

      <div class="form-group">
        <label>Biografi Singkat</label>
        <textarea name="biografi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Tambah Gambar</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" name="input" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>

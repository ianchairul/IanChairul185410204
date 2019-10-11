<?php
  require 'login.php';

  require "database/dbconnect.php";
  $sql = "select * from user_reg where username='".$_GET["username"]."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php require 'navbar.php'; ?>
  <?php require 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home - Update</a></li>
              <li class="breadcrumb-item active">Halaman Utama</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Update Pengguna</h5><br>

                <!-- Update -->
                <form action="database/updatereg.php?username=<?php echo $_GET["username"]?>" method="post" enctype="multipart/form-data">
              		<b>Nama</b><br>
                    <input class="form-control" type="text" name="nama" value="<?php echo $row["nama"]; ?>"><br>
                  <b>Username</b><br>
                    <input class="form-control" type="text" name="username" value="<?php echo $row["username"]; ?>"><br>
                  <b>Password</b><br>
                    <input class="form-control" type="password" name="password" value="<?php echo $row["password"]; ?>"><br>
                  <b>Email</b><br>
                    <input class="form-control" type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
                  <b>Jenis Kelamin</b><br>

                    <?php
                    if($row["jkelamin"]=="Laki-laki")
                      echo '<input type="radio" name="jkelamin" value="Laki-laki" checked>Laki-laki<br>';
                    else
                      echo '<input type="radio" name="jkelamin" value="Laki-laki">Laki-laki<br>';

                    if($row["jkelamin"]=="Perempuan")
                      echo '<input type="radio" name="jkelamin" value="Perempuan" checked>Perempuan<br>';
                    else
                      echo '<input type="radio" name="jkelamin" value="Perempuan">Perempuan<br>';
                    ?>

                    <br>

                  <b>Tanggal Lahir</b><br>
                    <input class="form-control" type="date" name="tanggal" value="<?php echo $row["tlahir"]; ?>"><br>
                  <b>Agama</b><br>
                    <select class="form-control" name="agama">
                      <option value="">-- Silahkan Pilih --</option>

                      <?php
                      if($row["agama"]=="Islam") echo '<option value="Islam" selected>Islam</option>';
                      else echo '<option value="Islam">Islam</option>';

                      if($row["agama"]=="Kristen") echo '<option value="Kristen" selected>Kristen</option>';
                      else echo '<option value="Kristen">Kristen</option>';

                      if($row["agama"]=="Hindu") echo '<option value="Hindu" selected>Hindu</option>';
                      else echo '<option value="Hindu">Hindu</option>';

                      if($row["agama"]=="Budha") echo '<option value="Budha" selected>Budha</option>';
                      else echo '<option value="BudhaBudha">Budha</option>';
                      ?>

                    </select><br>
                  <b>Hobi</b><br>

                    <?php
                    if($row["hobi1"])
                      echo '<input type="checkbox" name="hobi1" value="Memancing" checked>Memancing<br>';
                    else
                      echo '<input type="checkbox" name="hobi1" value="Memancing">Memancing<br>';

                    if($row["hobi2"])
                      echo '<input type="checkbox" name="hobi2" value="Sepeda" checked>Bersepeda<br>';
                    else
                      echo '<input type="checkbox" name="hobi2" value="Sepeda">Sepeda<br>';

                    if($row["hobi3"])
                      echo '<input type="checkbox" name="hobi3" value="Nonton" checked>Nonton<br>';
                    else
                      echo '<input type="checkbox" name="hobi3" value="Nonton">Nonton<br>';
                    ?>
                    <br>

                  <b>Biografi Singkat</b><br>
                    <textarea class="form-control" name="biografi" cols="40" rows="5"><?php echo $row["biografi"]; ?></textarea>
                  <br>

              		<b>Upload</b><br>
              			<input type="file" name="file"><br><br>

                  <input class="btn btn-success" type="submit" name="input" value="Input">
                  <input class="btn btn-danger" type="reset" value="Reset">
              	</form>

                <!-- <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p> -->

                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require 'sidebar2.php'; ?>
  <?php require 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>

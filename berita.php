<?php
  require 'login.php';
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
            <h1 class="m-0 text-dark">Halaman Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active">Halaman Berita</li>
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
              <div class="card-header">
                <h3 class="card-title">
                  Daftar Berita
                </h3>
              </div>
            <!-- /.card-header -->
              <div class="card-body">
                <?php require 'database/readberita.php'; ?>
              </div>
                <!-- /. tools -->

                <!-- <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p> -->

                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>


        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Tambah Berita
                  <small>Tambahkan berita baru dan kuasai dunia!</small>
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="remove"
                          data-toggle="tooltip"
                          title="Remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              <!-- /. tools -->
              </div>
            <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                  <form action="database/postberita.php" method="post" enctype="multipart/form-data">
                    <b>Gambar Berita</b><br>
                    <input type="file" name="gbr_berita" value="Gambar Berita"><br><br>
                    <input type="text" name="judul" placeholder="Judul" class="form-control"><br>
                    <textarea id="editor1" name="isi_berita" style="width: 100%;"></textarea><br>

                    <input class="btn btn-success" type="submit" name="input" value="Input">
                    <input class="btn btn-danger" type="reset" value="Reset">
                  </form>
                </div>
                <p class="text-sm mb-0">Please adhere to the <a href="https://ckeditor.com/ckeditor-5-builds/#classic">CKEditor</a>
                  license when using it!
                </p>
              </div>
                <!-- /. tools -->

                <!-- <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p> -->

                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require 'sidebar2.php'; ?>
  <?php require 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>

<script src="plugins/fastclick/fastclick.js"></script>
<script src="plugins/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });

  ClassicEditor
    .create(document.querySelector('#editor1'))
    .then(function (editor) {
      // The editor instance
    })
    .catch(function (error) {
      console.error(error)
  })
</script>
</body>
</html>

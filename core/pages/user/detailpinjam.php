<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] == "") {
  header("location:index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Importing link style -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-head.php'; ?>
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    table {
      width: 100%;
      font-family: arial, sans-serif;
      border-collapse: collapse;
    }

    th {
      padding: 8px;
      text-align: left;
      border-top: 1px solid #33FFA4;
      border-bottom: 1px solid #33FFA4;
    }

    td {
      padding: 8px;
      text-align: left;
      border-top: 1px solid #dee2e6;
    }

    tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>D</b>Lib
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <b>Digi</b>Lib
        </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="/core/services/logout.php">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
                <ul class="dropdown-menu">
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Selamat Datang Admin</p>
            <a href="#">
              <i class="fa fa-circle text-success"></i> Online </a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="pinjam.php">
                  <i class="fa fa-circle-o"></i> Pinjam Buku </a>
              </li>
              <li>
                <a href="daftarpinjam.php">
                  <i class="fa fa-circle-o"></i> Daftar Pinjam </a>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1> Dashboard </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home </a>
          </li>
          <li class="pull-right-container">Dashboard</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <section class="content">
          <?php
          include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
          $no_buku = $_GET['no_buku'];
          $sql = "select * from buku where no_buku=$no_buku";

          $hasil = mysqli_query($koneksi, $sql);
          $data = mysqli_fetch_assoc($hasil);
          ?>
          <form action="simpanpinjambuku.php" method="post">
            <input type="hidden" name="no_buku" value="
																								<?php echo $no_buku; ?>" />
            <label>Username </label>
            <input type="text" readonly="readonly" name="username" value="
																									<?php echo $_SESSION['username']; ?>" class="form-control" placeholder="Masukan judul" />
            <label>Judul </label>
            <input type="text" readonly="readonly" name="judul" value="
																										<?php echo $data['judul']; ?>" class="form-control" placeholder="Masukan judul" />
            <label>Pengarang</label>
            <input type="text" readonly="readonly" name="pengarang" value="
																											<?php echo $data['pengarang']; ?>" class="form-control" placeholder="Masukan pengarang" />
            <label>Penerbit</label>
            <input type="text" readonly="readonly" name="penerbit" value="
																												<?php echo $data['penerbit']; ?>" class="form-control" placeholder="Masukan penerbit" />
            <label>Tanggal Pinjam</label>
            <input type="text" readonly="readonly" name="tgl_pinjam" class="form-control" value="
																													<?php $tgl = date('Y-m-d');
                                                          echo $tgl; ?>" />
            <input type="hidden" name="upload" value="
																														<?php echo $data['upload']; ?>" class="form-control" placeholder="Masukan penerbit" />
            <br>
            <button type="submit" class="btn btn-primary">Pinjam</button>
          </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2022 </strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-footer-script.php'; ?>
</body>

</html>
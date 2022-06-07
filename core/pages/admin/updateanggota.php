<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role'] == "") {
  header("Location: http://" . $_SERVER['HTTP_HOST']);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Importing link style -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-head.php'; ?>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
              <a href="logout.php">
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
              <span>Master Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="anggota.php">
                  <i class="fa fa-user"></i> Anggota </a>
              </li>
              <li>
                <a href="books.php">
                  <i class="fa fa-book"></i> Buku </a>
              </li>
            </ul>
          </li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Menu Lain</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="pinjam.html">
                  <i class="fa fa-refresh"></i> Peminjaman </a>
              </li>
              <li>
                <a href="/core/services/logout.php">
                  <i class="fa fa-sign-out"></i> Logout </a>
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
        <div class="container"> <?php
                                include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
                                $no_anggota = $_GET['no_anggota'];
                                $sql = "select * from anggota where no_anggota=$no_anggota";

                                $hasil = mysqli_query($koneksi, $sql);
                                $data = mysqli_fetch_assoc($hasil);
                                ?> <h2>Update Data Anggota</h2>
          <form action="/core/services/simpanupdateanggota.php" method="post">
            <label>Nama</label>
            <input type="text" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>" class="form-control" placeholder="Masukan alamat" />
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" placeholder="Masukan alamat" />
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control" placeholder="Masukan email" />
            <label>username</label>
            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" placeholder="Masukan username" />
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" placeholder="Masukan Password" />
            <label>Role</label>
            <input type="text" name="role" value="<?php echo $data['role']; ?>" class="form-control" placeholder="Masukan role" />
            <input type="hidden" name="no_anggota" value="<?php echo $no_anggota; ?>" />
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>. </strong> All rights reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-footer-script.php'; ?>
</body>

</html>
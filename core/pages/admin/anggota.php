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
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Importing link style -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-head.php'; ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <!-- Google Font -->
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
      border-top: 1px solid #605ca8;
      border-bottom: 1px solid #605ca8;
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

<body class="hold-transition skin-purple sidebar-mini">
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
            <img src="/library/admin-lte/img/avatar.png" class="img-circle" alt="User Image">
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
                <a href="daftarpinjamadmin.php">
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
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php'; ?>
      <section class="content">
        <div class="container">
          <h2 style="text-align: center;">Daftar Anggota</h2>
          <br>
          <table>
            <thead>
              <tr>
                <th width="2%">Nomer</th>
                <th width="15%">Nama</th>
                <th width="15%">Alamat</th>
                <th width="15%">Email</th>
                <th width="10%">Username</th>
                <th width="5%">Role</th>
                <th width="15%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $batas = 10;
              $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

              $previous = $halaman - 1;
              $next = $halaman + 1;

              $data = mysqli_query($koneksi, "select * from anggota");
              $jumlah_data = mysqli_num_rows($data);
              $total_halaman = ceil($jumlah_data / $batas);

              $data_pegawai = mysqli_query($koneksi, "select * from anggota limit $halaman_awal, $batas");
              $nomor = $halaman_awal + 1;
              while ($d = mysqli_fetch_array($data_pegawai)) {
              ?>
                <tr>
                  <td> <?php echo $nomor++; ?> </td>
                  <td> <?php echo $d['nama_anggota']; ?> </td>
                  <td> <?php echo $d['alamat']; ?> </td>
                  <td> <?php echo $d['email']; ?> </td>
                  <td> <?php echo $d['username']; ?> </td>
                  <td> <?php echo $d['role']; ?> </td>
                  <td>
                    <a href="updateanggota.php?no_anggota=
                    <?php echo $d['no_anggota']; ?>">Update | <a href="/core/services/deleteanggota.php?no_anggota=
                  <?php echo $d['no_anggota']; ?>" onclick="javascript: return confirm('Anda yakin akan hapus data?')">| Delete
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <center>
          <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" <?php if ($halaman > 1) {
                                        echo "href='?halaman=$previous'";
                                      } ?>>Previous </a>
              </li> <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                    ?> <li class="page-item">
                  <a class="page-link" href="?halaman=
                    <?php echo $x ?>"> <?php echo $x; ?>
                  </a>
                </li> <?php
                    }
                      ?> <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                        echo "href='?halaman=$next'";
                                      } ?>>Next </a>
              </li>
            </ul>
          </nav>
        </center>
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
    <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- jQuery 3 -->
  <script src="/library/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/library/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/library/bower-components/bootstrap/js/bootstrap.min.js"></script>
  <!-- Sparkline -->
  <script src="/library/js/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="/library/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/library/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/library/js/jquery.knob.min.js"></script>
  <!-- Morris.js charts -->
  <script src="/library/bower-components/raphael/raphael.min.js"></script>
  <script src="/library/bower-components/morris.js/morris.min.js"></script>
  <!-- daterangepicker -->
  <script src="/library/moment/moment.min.js"></script>
  <script src="/library/bower-components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="/library/bower-components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="/library/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="/library/js/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/library/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/library/admin-lte/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/library/admin-lte/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/library/admin-lte/js/demo.js"></script>
</body>

</html>
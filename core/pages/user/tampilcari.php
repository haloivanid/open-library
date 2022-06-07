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
  <title>User | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Importing link style -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-head.php'; ?>
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
      <a href="index.php" class="logo">
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/library/admin-lte/img/avatar2.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Selamat Datang <?php echo $_SESSION['username']; ?> </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="/library/admin-lte/img/avatar2.jpg" class="img-circle" alt="User Image">
                </li>
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
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar">
                <i class="fa fa-gears"></i>
              </a>
            </li>
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
            <img src="/library/admin-lte/img/avatar2.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Selamat Datang <?php echo $_SESSION['username']; ?> </p>
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
      <!-- Main content -->
      <section class="content">
        <div class="container">
          <h2>
            <center>Hasil cari data
          </h2>
          </center> <?php
                    $keyword = @$_GET['q']; // ambil variable keyword
                    echo "Data pencarian nama: '
																							<i>" . $keyword . "</i>'"; ?> <br>
          <br> <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
                //query cari dengan metode like 
                $data = mysqli_query($koneksi, "select * from buku where judul like '%" . $keyword . "%'");
                if (mysqli_num_rows($data) == 0) { // jikda data kosong
                  echo "
																									<font color=red>MAAF, data tidak ditemukan!</font>
																									<br>";
                } else { ?> <table>
              <tr>
                <th width="5%" align="center">No</th>
                <th width="25%" align="center">Judul</th>
                <th width="25%" align="center">Pengarang</th>
                <th width="25%" align="center">Penerbit</th>
                <th width="10%" align="center">Aksi</th>
              </tr> <?php
                    // tampilkan data cari
                    while ($d = mysqli_fetch_array($data)) { ?> <tr>
                  <td> <?php echo $d['no_buku']; ?> </td>
                  <td> <?php echo $d['judul']; ?> </td>
                  <td> <?php echo $d['pengarang']; ?> </td>
                  <td> <?php echo $d['penerbit']; ?> </td>
                  <td>
                    <a href="detailpinjam.php?no_buku=
                      <?php echo $d['no_buku']; ?>" onclick="javascript: return confirm('Anda yakin pinjam buku ini?')"> Pinjam
                  </td> <?php
                      }
                    };
                        ?>
            </table>
            <br />
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
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-footer-script.php'; ?>
</body>

</html>
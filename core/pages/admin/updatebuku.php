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

<body class="hold-transition skin-green sidebar-mini">
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
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar">
                <i class="fa fa-gears"></i>
              </a>
            </li>
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
            <img src="assets/dist/img/logo.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Selamat Datang, Mei</p>
            <a href="#">
              <i class="fa fa-circle text-success"></i> Online </a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
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
                <a href="logout.php">
                  <i class="fa fa-sign-out"></i> Logout </a>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container"> <?php
                                include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
                                $no_buku = $_GET['no_buku'];
                                $sql = "select * from buku where no_buku=$no_buku";

                                $hasil = mysqli_query($koneksi, $sql);
                                $data = mysqli_fetch_assoc($hasil);
                                ?> <h2>Update Data Buku</h2>
          <form action="/core/services/simpanupdatebuku.php" method="post">
            <label>Judul</label>
            <input type="text" name="judul" value="<?php echo $data['judul']; ?>" class="form-control" placeholder="Masukan judul" />
            <label>Pengarang</label>
            <input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>" class="form-control" placeholder="Masukan pengarang" />
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>" class="form-control" placeholder="Masukan penerbit" />
            <label>Tahun</label>
            <input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" class="form-control" placeholder="Masukan tahun" />
            <input type="hidden" name="no_buku" value="<?php echo $no_buku; ?>" />
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
      <strong>Copyright 2022 </strong>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li>
          <a href="#control-sidebar-home-tab" data-toggle="tab">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li>
          <a href="#control-sidebar-settings-tab" data-toggle="tab">
            <i class="fa fa-gears"></i>
          </a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading"> Custom Template Design <span class="label label-danger pull-right">70%</span>
                </h4>
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading"> Update Resume <span class="label label-success pull-right">95%</span>
                </h4>
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading"> Laravel Integration <span class="label label-warning pull-right">50%</span>
                </h4>
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading"> Back End Framework <span class="label label-primary pull-right">68%</span>
                </h4>
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
            <div class="form-group">
              <label class="control-sidebar-subheading"> Report panel usage <input type="checkbox" class="pull-right" checked>
              </label>
              <p> Some information about this general settings option </p>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label class="control-sidebar-subheading"> Allow mail redirect <input type="checkbox" class="pull-right" checked>
              </label>
              <p> Other sets of options are available </p>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label class="control-sidebar-subheading"> Expose author name in posts <input type="checkbox" class="pull-right" checked>
              </label>
              <p> Allow the user to show his name in blog posts </p>
            </div>
            <!-- /.form-group -->
            <h3 class="control-sidebar-heading">Chat Settings</h3>
            <div class="form-group">
              <label class="control-sidebar-subheading"> Show me as online <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label class="control-sidebar-subheading"> Turn off notifications <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label class="control-sidebar-subheading"> Delete chat history <a href="javascript:void(0)" class="text-red pull-right">
                  <i class="fa fa-trash-o"></i>
                </a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-footer-script.php'; ?>
</body>

</html>
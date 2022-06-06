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
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Importing link style -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/dashboard-head.php'; ?>
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
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php'; ?>
  <div class="container">
    <h2 style="text-align: center;">Daftar Pinjam</h2>
    <br>
    <table>
      <tr>
        <th width="10%">Nomer</th>
        <th width="30%">Judul</th>
        <th width="20%">Pengarang</th>
        <th width="20%">Penerbit</th>
        <th width="10%">Tahun</th>
        <th width="10%">Baca</th>
      </tr>
      <?php

      $batas = 10;
      $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
      $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

      $previous = $halaman - 1;
      $next = $halaman + 1;

      $data = mysqli_query($koneksi, "select * from pinjam");
      $jumlah_data = mysqli_num_rows($data);
      $total_halaman = ceil($jumlah_data / $batas);

      $data = mysqli_query($koneksi, "select * from pinjam");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $d['no_buku']; ?></td>
          <td><?php echo $d['judul']; ?></td>
          <td><?php echo $d['pengarang']; ?></td>
          <td><?php echo $d['penerbit']; ?></td>
          <td><?php echo $d['tgl_pinjam']; ?></td>
          <td><a href="buku/<?php echo $d['upload'] ?>"><?php echo $d['upload'] ?></a></td>
        <?php
      }
        ?>
    </table>
    <script>
      window.print();
    </script>
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
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$username = $_POST['username'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$upload = $_POST['upload'];

$query = "INSERT INTO pinjam (no_buku, username, judul, pengarang, penerbit, tgl_pinjam, upload) VALUES ('$no_buku', '$username', '$judul', '$pengarang', '$penerbit', '$tgl_pinjam', '$upload')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_error($koneksi).
                      " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='pinjam.php';</script>";
                  }

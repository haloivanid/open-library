<?php

include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';

$no_anggota= (int)$_POST["no_anggota"];
$nama_anggota=$_POST["nama_anggota"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$role=$_POST["role"];
$query="update anggota set
    nama_anggota='$nama_anggota', 
    alamat='$alamat', 
    email='$email', 
    username='$username',
    password='$password', 
    role='$role'
    where no_anggota=$no_anggota";

$result=mysqli_query($koneksi,$query);
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_error($koneksi) .
  " - " . mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil diperbaharui.');document.location='/core/pages/admin/anggota.php';</script>";
}
?>
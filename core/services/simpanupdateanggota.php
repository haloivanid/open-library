<?php

include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';

$no_anggota=$_POST["no_anggota"];
$nama_anggota=$_POST["nama_anggota"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$role=$_POST["role"];
	
$sql="update anggota set
      nama_anggota='$nama_anggota', 
      alamat='$alamat', 
      email='$email', 
      username='$username',
      password='$password', 
      role='$role'
      where no_anggota=$no_anggota";

$hasil=mysqli_query($koneksi,$sql);
	header("Location:anggota.php");
?>
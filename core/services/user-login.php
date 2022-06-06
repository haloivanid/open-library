<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from anggota where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
  $data = mysqli_fetch_assoc($login);

  // cek jika user login sebagai admin
  if($data['role']=="1"){

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "1";
    // alihkan ke halaman dashboard admin
    header("location:admin.php");

  // cek jika user login sebagai pegawai
  }else if($data['role']=="2"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "2";
    // alihkan ke halaman dashboard pegawai
    header("location:user.php");

  }else{
    // alihkan ke halaman login kembali
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "?pesan=gagal");
  }

}else{
  header("Location: http://" . $_SERVER['HTTP_HOST'] . "?pesan=gagal");
}

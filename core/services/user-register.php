<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

$users = mysqli_query($koneksi, "SELECT * from anggota");
$new_id = mysqli_num_rows($users) + 1;

$result = mysqli_query(
  $koneksi,
  "INSERT INTO anggota (no_anggota, nama_anggota, alamat, email, username, password, role) VALUES ('$new_id', '$fullname', '$address', '$email', '$username', '$password', 2)"
) or die(mysqli_error($koneksi));

if ($result == 1) {
  header("Location: http://" . $_SERVER['HTTP_HOST'] . "?register=success");
}

?>

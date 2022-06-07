<?php
// koneksi database
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
 // menangkap data no_buku yang di kirim dari url
$no_anggota = $_GET['no_anggota'];
// menghapus data dari database
mysqli_query($koneksi,"delete from anggota where no_anggota='$no_anggota'");
// mengalihkan halaman kembali ke index.php
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/core/pages/admin/anggota.php");
?>
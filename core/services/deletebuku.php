<?php
// koneksi database
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
 // menangkap data no_buku yang di kirim dari url
$no_buku = $_GET['no_buku'];
// menghapus data dari database
mysqli_query($koneksi,"delete from buku where no_buku='$no_buku'");
// mengalihkan halaman kembali ke index.php
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/core/pages/admin/books.php");
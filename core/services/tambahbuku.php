<?php
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';
$nomer = $_POST['nomer'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$terbit = $_POST['terbit'];
$upload = $_FILES['upload']['name'];

if ($upload != "") {
  $ekstensi_diperbolehkan = array('pdf'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $upload); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['upload']['tmp_name'];
  $upload_baru = $upload; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '/assets/files/buku' . $upload_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO buku (no_buku, judul, pengarang, penerbit, tahun_terbit, upload) VALUES ('$nomer', '$judul', '$pengarang', '$penerbit', '$terbit','$upload')";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');document.location='/core/pages/admin/books.php';</script>";
    }
  } else {
    //jika file ekstensi .pdf maka alert ini yang tampil
    echo "<script>alert('Ekstensi yang boleh hanya pdf atau png.');document.location='/core/pages/admin/books.php';</script>";
  }
} else {
  $query = "INSERT INTO buku (no_buku, judul, pengarang, penerbit, tahun_terbit, upload) VALUES ('$nomer', '$judul', '$pengarang', '$penerbit', '$terbit',NULL)";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');document.location='/core/pages/admin/books.php';</script>";
  }
}

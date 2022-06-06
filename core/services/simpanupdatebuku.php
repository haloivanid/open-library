<?php
//Include file koneksi ke database
include $_SERVER['DOCUMENT_ROOT'] . '/databases/connection.php';

//menerima nilai dari kiriman form updatebuku 
$no_buku=$_POST["no_buku"];
$judul=$_POST["judul"];
$pengarang=$_POST["pengarang"];
$penerbit=$_POST["penerbit"];
$tahun_terbit=$_POST["tahun_terbit"];

	//perintah sql untuk update data barang berdasarkan no buku yang akan di update
    $sql="update buku set
      judul='$judul', 
      pengarang='$pengarang', 
      penerbit='$penerbit', 
      tahun_terbit='$tahun_terbit'
      where no_buku=$no_buku";
      $hasil=mysqli_query($koneksi,$sql);

      //apabila berhasil maka halaman akan di redirect ke buku.php	
      header("Location:buku.php");

<?php 
  $koneksi = mysqli_connect("8.219.122.52","root","Van@010168","OpenLibraryDB");
  if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }

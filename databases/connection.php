<?php 
  $koneksi = mysqli_connect("localhost","haloivan","Van@010168","library");
  if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }

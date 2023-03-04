<?php 

$nama = $_GET['nama'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];
if ($produk=="TV")$harga=4200000;
if ($produk=="Kulkas")$harga=3100000;
if ($produk=="Mesin Cuci")$harga=3600000;

$total_harga =$jumlah*$harga;



?>
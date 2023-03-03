<?php
// Mengambil data input
$costumer = $_POST['costumer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$harga = 0;
  if ($produk === 'tv') {
    $harga = 4200000;
  } else if ($produk === 'kulkas') {
    $harga = 3100000;
  } else if ($produk === 'mesin_cuci') {
    $harga = 3800000;
  } else {
  echo 'Produk tidak valid';
    exit();
  }
    $total_harga = $harga * $jumlah;
?>
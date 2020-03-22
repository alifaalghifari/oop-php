<?php

require_once 'App/init.php';

$produk1 = new Buku("Seni hidup minimalis", "Francine jay", "Gramedia", 35000, 100);
$produk2  = new Game("Uncharted", "Neil Druckman", "Sony Computer", 200000, 50);

$cetak = new CetakInfoProduk();

$cetak->setTambahProduk($produk1);
$cetak->setTambahProduk($produk2);

echo $cetak->infoLengkap();

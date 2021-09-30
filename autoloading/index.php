<?php

require_once 'App/init.php';

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shopen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 250000, 50);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);

echo $cetakproduk->cetak();

echo "<hr>";

new coba();
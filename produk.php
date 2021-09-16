<?php

//Jualan produk
//jualan komik
// jualan game

class Produk {
    Public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "0";

    public function getLabel(){
        return "$this->penulis, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharthed";
// $produk2->tambahproperti = "hahha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();

echo "<br>";
echo "Game :" . $produk4->getLabel();



?>
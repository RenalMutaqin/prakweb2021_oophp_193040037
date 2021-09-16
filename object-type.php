<?php

//Jualan produk
//jualan komik
// jualan game

use Produk as GlobalProduk;

class Produk {
    Public $judul,
            $penulis,
            $penerbit,
            $harga;

            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
            {
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;
            }
          

    public function getLabel(){
        return "$this->penulis, $this->penulis";
    }
}


class cetakinfoproduk {
    public function cetak(produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
        return $str;
    }
}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shopen Jump", 30000);
$produk2 = new produk("Uncharted","Neil Druckman", "Sony Computer", 250000);


echo "komik : " . $produk1->getLabel();

echo "<br>";
echo "Game :" . $produk2->getLabel();

echo "<br>";

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);


?>
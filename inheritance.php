<?php

//Jualan produk
//jualan komik
// jualan game

use Produk as GlobalProduk;

class Produk {
    Public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktumain;

            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0)
            {
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;
                    $this->jmlHalaman = $jmlHalaman;
                    $this->waktumain = $waktumain;

            }
          

    public function getLabel(){
        return "$this->penulis, $this->penulis";
    }
    public function getInfoproduk(){
        $str = "{$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}


class komik extends produk {
    public function getInfoproduk(){
        $str = "komik : {$this->judul} : {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
    

class Game extends produk {
    public function getInfoproduk(){
        $str = "Game : {$this->judul} : {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
        return $str;
    }
}


class cetakinfoproduk {
    public function cetak(produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
        return $str;
    }
}


$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shopen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 250000, 0, 50);


echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();

?>
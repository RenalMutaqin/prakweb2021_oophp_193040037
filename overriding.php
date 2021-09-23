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
    public function getInfoproduk(){
        $str = "{$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}


class komik extends produk {
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent ::__construct( $judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoproduk(){
        $str = "komik : " . parent::getInfoproduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
    

class Game extends produk {
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0){
        parent ::__construct( $judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;  
    }

    public function getInfoproduk(){
        $str ="Game : " . parent::getInfoproduk() . " ~ {$this->waktumain} Jam.";
        return $str;
    }
}


class cetakinfoproduk {
    public function cetak(produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
        return $str;
    }
}


$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shopen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 250000, 50);


echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();

?>
<?php


abstract class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
  $diskon = 0;


            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
            {
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;

            }
            public function setjudul($judul){
                $this->judul = $judul;

            }
            public function getjudul(){
                return$this->judul;

            }
            public function setpenulis($penulis){
                $this->penulis = $penulis;

            }
            public function getpenulis(){
                return$this->penulis;

            }
            public function setpenerbit($penerbit){
                $this->judul = $penerbit;

            }
            public function getpenerbit(){
                return$this->penerbit;

            }
            public function setDiskon ( $diskon){
                $this->diskon = $diskon;
            }
            public function getDiskon(){
                return $this->diskon;
            }
         

            public function setHarga($harga){
                $this->harga=$harga;
            }

            public function getHarga(){
                return $this->harga - ($this->harga * $this->diskon / 100);
            }
          

    public function getLabel(){
        return "$this->penulis, $this->penulis";
    }
    abstract public function getInfoproduk();
    
    public function getInfo() {
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
        $str = "komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
        $str ="Game : " . $this->getInfo() . " ~ {$this->waktumain} Jam.";
        return $str;
    }
}


class cetakinfoproduk {
    public $daftarproduk = array();

    public function tambahproduk(produk $produk){
        $this->daftarproduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";
        
        foreach($this->daftarproduk as $p){
            $str .= "- {$p->getInfoproduk()
            } <br>";
        }
        return $str;
    }
}


$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shopen Jump", 30000, 100);
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 250000, 50);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);

echo $cetakproduk->cetak();
?>
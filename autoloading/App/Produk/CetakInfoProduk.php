<?php

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
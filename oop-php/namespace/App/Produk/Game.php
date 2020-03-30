<?php

class Game extends Produk implements InfoProduk
{
    public $lamaMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaMain = 0)
    {
        $this->lamaMain = $lamaMain;
        $this->harga = $harga;
        parent::__construct($judul, $penulis, $penerbit, $harga);
    }


    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . "- {$this->lamaMain} Jam";
        return $str;
    }

    // setter dan getter diskon dalam class Game
    public function setDiskon($diskon)
    {
        parent::setDiskon($diskon);
    }
    public function getDiskon()
    {
        return parent::getHarga("Game");
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()}, Rp  {$this->harga}";
        return $str;
    }
}

<?php

class Produk
{
    public $judul, $penulis, $penerbit;
    protected $diskon = 0;
    private $harga;

    // constructor 
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return $this->penulis . ", " . $this->penerbit;
    }

    protected function hargaDiskon($judul)
    {
        $hargaDiskon = $this->harga - ($this->harga * $this->diskon / 100);
        return "Harga {$judul} setelah diskon :" . $hargaDiskon;
    }

    public function infoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}, Rp  {$this->harga}";
        return $str;
    }
}

class Buku extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        $this->jmlHalaman = $jmlHalaman;

        parent::__construct($judul, $penulis, $penerbit, $harga);
    }
    public function infoBuku()
    {
        $str = "Buku : " . parent::infoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $lamaMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaMain = 0)
    {
        $this->lamaMain = $lamaMain;
        $this->harga = $harga;
        parent::__construct($judul, $penulis, $penerbit, $harga);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function infoGame()
    {
        $str = "Game : " . parent::infoProduk() . "- {$this->lamaMain} Jam";
        return $str;
    }

    public function infoDiskon()
    {
        return parent::hargaDiskon("Buku");
    }
}

class cetakInfoProduk
{
    public function info(Produk $produk)
    {
        return "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
    }

    public function infoLengkap(Produk $produk)
    {

        $str = "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
        return $str;
    }
}



$produk1 = new Buku("Seni hidup minimalis", "Francine jay", "Gramedia", 35000, 100);
$produk2  = new Game("Uncharted", "Neil Druckman", "Sony Computer", 200000, 50);



echo $produk1->infoBuku();
echo "<br>";
echo $produk2->infoGame();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->infoDiskon();

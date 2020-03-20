<?php

class Produk
{
    private $judul, $penulis, $penerbit, $harga, $diskon = 0;


    // constructor 
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->penulis . ", " . $this->penerbit;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    protected function getDiskon($judul)
    {
        $hargaDiskon = $this->harga - ($this->harga * $this->diskon / 100);
        return "Harga {$judul} setelah diskon :" . $hargaDiskon;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }


    public function getInfoProduk()
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
    public function getInfoBuku()
    {
        $str = "Buku : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }

    public function getDiskonBuku()
    {
        return parent::getDiskon("Buku");
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

    public function getInfoGame()
    {
        $str = "Game : " . parent::getInfoProduk() . "- {$this->lamaMain} Jam";
        return $str;
    }

    public function getDiskonGame()
    {
        return parent::getDiskon("Game");
    }
}

// class cetakInfoProduk
// {
//     public function info(Produk $produk)
//     {
//         return "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
//     }

//     public function infoLengkap(Produk $produk)
//     {

//         $str = "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
//         return $str;
//     }
// }



$produk1 = new Buku("Seni hidup minimalis", "Francine jay", "Gramedia", 35000, 100);
$produk2  = new Game("Uncharted", "Neil Druckman", "Sony Computer", 200000, 50);



echo $produk1->getInfoBuku();
echo "<br>";
echo $produk2->getInfoGame();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getDiskonGame();
echo "<br>";
$produk1->setDiskon(50);
echo $produk1->getDiskonBuku();
echo "<hr>";

$produk1->setJudul("Judul baru");
echo $produk1->getJudul();

echo "<hr>";
$produk1->setPenerbit("Bentang");
echo $produk1->getPenerbit();

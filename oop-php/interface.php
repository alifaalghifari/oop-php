<?php

interface InfoProduk
{
    public function getInfoProduk();
}

abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;



    // constructor 
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // setter dan getter $judul
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    // setterdan getter $penulis
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return  $this->penulis;
    }

    // setter dan getter $penerbit
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // setter dan getter diskon
    protected function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    protected function getHarga($judul)
    {
        $hargaDiskon = $this->harga - ($this->harga * $this->diskon / 100);
        return "Harga {$judul} setelah diskon :" . $hargaDiskon;
    }

    public function getLabel()
    {
        return $this->penulis . ", " . $this->penerbit;
    }

    abstract public function getInfo();
}

class Buku extends Produk implements InfoProduk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        $this->jmlHalaman = $jmlHalaman;

        parent::__construct($judul, $penulis, $penerbit, $harga);
    }
    public function getInfoProduk()
    {
        $str = "Buku : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }

    public function setDiskon($diskon)
    {
        parent::setDiskon($diskon);
    }
    public  function getDiskon()
    {
        return parent::getHarga("Buku");
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()}, Rp  {$this->harga} ";
        return $str;
    }
}

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

class cetakInfoProduk
{
    public $daftarProduk = array();

    public function setTambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function infoLengkap()
    {
        $str =  "DAFTAR  PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Buku("Seni hidup minimalis", "Francine jay", "Gramedia", 35000, 100);
$produk2  = new Game("Uncharted", "Neil Druckman", "Sony Computer", 200000, 50);

$cetak = new cetakInfoProduk();

$cetak->setTambahProduk($produk1);
$cetak->setTambahProduk($produk2);

echo $cetak->infoLengkap();

$produk2->setDiskon(50);
echo $produk2->getDiskon();
echo "<br>";
$produk1->setDiskon(10);
echo $produk1->getDiskon();

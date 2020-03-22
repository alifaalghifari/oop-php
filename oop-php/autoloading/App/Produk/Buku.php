<?php

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

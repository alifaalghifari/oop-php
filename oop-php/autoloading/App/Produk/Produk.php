<?php

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

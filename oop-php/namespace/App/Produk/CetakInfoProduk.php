<?php

class CetakInfoProduk
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

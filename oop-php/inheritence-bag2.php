<?php

class Produk
{
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $lamaMain;

	// constructor 
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $lamaMain = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->lamaMain = $lamaMain;
	}

	public function getLabel()
	{
		return $this->penulis . ", " . $this->penerbit;
	}

	public function infoProduk()
	{

		$str = "{$this->judul} | {$this->getLabel()}, Rp {$this->harga} ";
		return $str;
	}
}

class Buku extends Produk
{
	public function infoBuku()
	{
		$str = "Buku : {$this->judul} | {$this->getLabel()}, Rp {$this->harga} - {$this->jmlHalaman} Halaman";
		return $str;
	}
}

class Game extends Produk
{
	public function infoGame()
	{
		$str = "Game : {$this->judul} | {$this->getLabel()}, Rp {$this->harga} - {$this->lamaMain} Jam";
		return $str;
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



$produk1 = new Buku("Seni hidup minimalis", "Francine jay", "Gramedia", 35000, 100, 0);
$produk2  = new Game("Uncharted", "Neil Druckman", "Sony Computer", 200000, 0, 50);


echo $produk1->infoBuku();
echo "<br>";
echo $produk2->infoGame();

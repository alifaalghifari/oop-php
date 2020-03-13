<?php 

class Produk{
	public $judul, $penulis, $penerbit, $harga;

	public function getLabel(){
		$judul = $this->judul;
		$penulis = $this->penulis;
		$penerbit = $this->penerbit;
		$harga = $this->harga;
		return $judul.", ".$penulis.", ".$penerbit.", ".$harga;
	}

}

$produk1 = new Produk();
$produk1->judul = "Seni hidup minimalis";
$produk1->penulis = "Francine jay";
$produk1->penerbit = "Gramedia";
$produk1->harga = 35000;

$produk2  = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckman";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 200000;


echo "Buku : ".$produk1->getLabel();
echo "<br>Game : " .$produk2->getLabel();



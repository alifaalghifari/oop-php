<?php 

class Produk{
	public $judul, $penulis, $penerbit, $harga;

	// constructor 
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel(){
		$judul = $this->judul;
		$penulis = $this->penulis;
		$penerbit = $this->penerbit;
		$harga = $this->harga;
		return $judul.", ".$penulis.", ".$penerbit.", ".$harga;
	}

}

$produk1 = new Produk("Seni hidup minimalis","Francine jay","Gramedia",35000);
$produk2  = new Produk("Uncharted","Neil Druckman","Sony Computer",200000);
$produk3 = new Produk("Sebuah seni untuk bersikap bodoh amat");




echo "Buku : ".$produk1->getLabel();
echo "<br>";
echo "Game : " .$produk2->getLabel();
echo "<br>";
echo "Buku : ".$produk3->getLabel();





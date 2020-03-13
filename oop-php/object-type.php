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
		return $this->penulis .", ". $this->penerbit;
	}

}

class cetakInfoProduk{
	public function info(Produk $produk){
		return "{$produk->judul} | {$produk->getLabel()}, {$produk->harga} ";
	}
}

$produk1 = new Produk("Seni hidup minimalis","Francine jay","Gramedia",35000);
$produk2  = new Produk("Uncharted","Neil Druckman","Sony Computer",200000);
$produk3 = new Produk("Sebuah seni untuk bersikap bodoh amat");

$infoProduk1 = new cetakInfoProduk();
$infoProduk2 = new cetakInfoProduk();
$infoProduk3 = new cetakInfoProduk();

echo $infoProduk1->info($produk1);
echo "<br>";
echo $infoProduk1->info($produk2);
echo "<br>";
echo $infoProduk1->info($produk3);








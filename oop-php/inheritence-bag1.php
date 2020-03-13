<?php 

class Produk{
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $lamaMain;

	// constructor 
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0,$lamaMain=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->lamaMain = $lamaMain;
	}

	public function getLabel(){
		return $this->penulis .", ". $this->penerbit;
	}



}

class cetakInfoProduk{
	public function info(Produk $produk){
		return "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
	}

	public function infoLengkap(Produk $produk){
		
		$str = "{$produk->judul} | {$produk->getLabel()}, Rp {$produk->harga} ";
		if($produk->lamaMain == 0){
			$tipe = "Buku : ";
			$str = $tipe.$str;
			$str .= " - {$produk->jmlHalaman} Halaman";
		}else if($produk->jmlHalaman == 0){
			$tipe = "Game : ";
			$str = $tipe . $str;
			$str .= " - {$produk->lamaMain} Jam";
		}

		return $str;
	}
}

$produk1 = new Produk("Seni hidup minimalis","Francine jay","Gramedia",35000,100,0);
$produk2  = new Produk("Uncharted","Neil Druckman","Sony Computer",200000,0,50);


$infoProduk1 = new cetakInfoProduk();
$infoProduk2 = new cetakInfoProduk();


echo $infoProduk1->infoLengkap($produk1);
echo "<br>";
echo $infoProduk1->info($produk2);
echo "<br>";
echo $infoProduk1->infoLengkap($produk2);
echo "<br>";









<?php 

// Jualan Produk
// Konflik
// Game

class Produk {
    public $judul = "judul",  
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


// $produk1 = new Produk();
// $produk1->judul = ""
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = "";
// $produk2->tambahproperty = ""
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Si Juki Anak Kosan #1";
$produk3->penulis = "Faza Meonk";
$produk3->penerbit = "Falcon Publishing";
$produk3->harga = 66600 ;

$produk4 = new Produk();
$produk4->judul = "bolang 2024";
$produk4->penulis = "trans 7";
$produk4->penerbit = " trans media";
$produk4->harga = 239000 ;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "novel : " . $produk4->getLabel();


?>
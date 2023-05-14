PT. Aya Nurhuda (2135024)
<br>
<br>

<?php
 class Produk {
    public $jenis = "";
    public $merek = "";
    public $stok = "";

    public function pesanProduk(){
        return $this->stok = $this->stok -2 ;
    }
    public function cekStok(){
       return "Sisa Stok: ".$this->stok." Bungkus" ;
    }

 }

 $makanan = new Produk();
 $makanan-> jenis = "Bungkus";
 $makanan-> merek = "BASRENG";
 $makanan-> stok = "90";

 echo $makanan->cekStok();
 echo "<br>";
 echo $makanan->pesanProduk();
 echo "<br>";
 echo $makanan->pesanProduk();
 echo "<br>";
 echo $makanan->pesanProduk();
 echo "<br>";

 echo $makanan->cekStok();
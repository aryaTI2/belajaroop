<?php

class Produk {
    public $merek = "Samsung";
    public $stok = "21";

  public function cekStok(){
    return "Sisa stok: ".$this->stok;
  }
}

class Televisi extends Produk {
  public $jenis = "Televisi";
  public $penjual = "ARYA";

  public function cekStokTelevisi(){
    return $this->jenis." ".$this->merek.", ".$this->cekStok();
  }
}
class LG extends Televisi {
    public $tipe = "LG";
 
    public function cekStoksmarttv(){
      return $this->tipe.",".$this->cekStokTelevisi();
    }
  }

class Panasonic extends Televisi {
    public $tipe = "Panasonic";
 
    public function cekStokLivestyleTv(){
      return $this->tipe.",".$this->cekStokTelevisi();
    }
  }
  

  $produk01 = new Televisi();
  echo "Penjual : " .$produk01->penjual;              
  echo "<br>";
  echo "Merek : ".$produk01->merek;                 
  echo "<br>";
  echo "Jenis : ".$produk01->jenis;                 
  echo "<br>";
  echo $produk01->cekStokTelevisi();    
  echo "<br>";
  echo "<br>";

  $produk02 = new LG();
  echo "Penjual : " .$produk02->penjual;             
  echo "<br>";
  echo "Merek : ".$produk02->merek;             
  echo "<br>";
  echo "Jenis : ".$produk02->jenis;             
  echo "<br>";
  echo "Tipe : ".$produk02->tipe;                  
  echo "<br>";
  echo $produk02->cekStoksmarttv();   
  echo "<br>";
  echo "<br>";

  $produk03 = new Panasonic();
  echo "Penjual : " .$produk02->penjual;              
  echo "<br>";
  echo "Merek : ".$produk03->merek;              
  echo "<br>";
  echo "Jenis : ".$produk03->jenis;                  
  echo "<br>";
  echo "Tipe : ".$produk03->tipe;                   
  echo "<br>";
  echo $produk03->cekStokLivestyleTv();   
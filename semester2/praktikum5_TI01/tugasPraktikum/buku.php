<?php 
class Buku{
    public $Judul;
    public $Penulis;
    public $Penerbit;
    public $TahunTerbit;
    public $Harga;
    public $Stok;

    public function __construct($Judul,$Penulis,$Penerbit,$TahunTerbit,$Harga,$Stok) {
        $this->Judul = $Judul;
        $this->Penulis = $Penulis;
        $this->Penerbit = $Penerbit;
        $this->TahunTerbit = $TahunTerbit;
        $this->Harga = $Harga;
        $this->Stok = $Stok;
    }

    public function Judul(){return $this->Judul;}
    public function Penulis(){return $this->Penulis;}
    public function Penerbit(){return $this->Penerbit;}
    public function TahunTerbit(){return $this->TahunTerbit;}
    public function Harga(){return $this->Harga;}
    public function Stok(){return $this->Stok;}
}

?>
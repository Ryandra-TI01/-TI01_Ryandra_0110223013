<?php  
class Manusia{
    public $nama;
    public $umur;
    // protected
    // private

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "nama : " . $this->nama . " umur : " . $this->umur;
    }
};
// membuat objek
$andra = new Manusia();
$andra->setNama('andra');
$andra->setUmur(18);
echo $andra->getInfo();

echo '<br>';

$anton = new Manusia();
$anton->setNama('anton');
$anton->setUmur(36);
echo $anton->getInfo();

?>
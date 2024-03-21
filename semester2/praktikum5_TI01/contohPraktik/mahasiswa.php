<?php 
class mahasiswa{
    private $nama;
    private $nilai;


    public function __construct($nama,$nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getNilai(){
        return $this->nilai;
    }
    public function hasilLulus(){
        return $this->nilai >= 60 ? 'lulus' : 'tidak lulus';
    }
    public function predikat(){
        return $this->nilai;

        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }
}


?>
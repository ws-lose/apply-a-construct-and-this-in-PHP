<?php 
class Mahasiswa {
    public $nama;
    public $prodi;

    public function __construct() {
    $this->nama="andi";
    $this->prodi="Sistem Informasi";
    }
    public function tampilkanData() {
        echo "Nama: ", $this->nama,"<br>",
        $this->prodi,"";
    }
}
$mhs1 = new Mahasiswa();
$mhs1->tampilkanData();
?>
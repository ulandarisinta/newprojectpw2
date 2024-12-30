<?php
include "Orang.php";

class Mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getNilaiSemeser(){

    }
}

class MahasiswaAsing extends Mahasiswa{
    
    //override
    public function ucapSalam(){
        echo "Hello My Name" . $this->nama;
    }
}
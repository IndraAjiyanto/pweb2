<?php

// membuat kelas bernama Mahasiswa
class Mahasiswa {

    // membuat properti private $nama, $nim, dan $jurusan yang hanya bisa diakses didalam kelas Mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Mahasiswa dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // method setNama yang digunakan untuk mengatur nilai properti $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // method getNama yang digunakan untuk mengembalikan nilai properti $nama
    public function getNama() {
        return $this->nama;
    }

    // method setNim yang digunakan untuk mengatur nilai properti $nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // method getNim yang digunakan untuk mengembalikan nilai properti $nim
    public function getNim() {
        return $this->nim;
    }

    // method setJurusan yang digunakan untuk mengatur nilai properti $jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // method getJurusan yang digunakan untuk mengembalikan nilai properti $jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // method tampilkanData yang digunakan untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi data mahasiswa
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}

// Membuat objek di $mahasiswa dari class Mahasiswa dengan nilai awal untuk nama, nim, dan jurusan
$mahasiswa = new Mahasiswa("Indra", "230103084", "Teknik Mesin");

// Menampilkan data mahasiswa awal menggunakan method tampilkanData
echo $mahasiswa->tampilkanData()."<br><hr>";

// Mengubah nilai properti $nama, $nim, dan $jurusan menggunakan method set
$mahasiswa->setNama("Indra Ajiyanto");
$mahasiswa->setNim("230102083");
$mahasiswa->setJurusan("Teknik Informatika");

// Menampilkan data mahasiswa yang baru menggunakan metode get
echo "Nama : ".$mahasiswa->getNama()."<br>";
echo "NIM : ".$mahasiswa->getNim()."<br>";
echo "Jurusan : ".$mahasiswa->getJurusan()."<br>";

?>

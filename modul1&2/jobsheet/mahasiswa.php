<?php

// Membuat kelas bernama Mahasiswa
class Mahasiswa{
    // Membuat properti public $nama, $nim, dan $jurusan yang dapat diakses dari luar kelas
    public $nama;
    public $nim; 
    public $jurusan;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Mahasiswa dibuat
    public function __construct($nama, $nim, $jurusan){
        // Inisialisasi properti $nama dengan nilai dari parameter $nama
        $this->nama = $nama;
        // Inisialisasi properti $nim dengan nilai dari parameter $nim
        $this->nim = $nim;
        // Inisialisasi properti $jurusan dengan nilai dari parameter $jurusan
        $this->jurusan = $jurusan;
    }

    // Method tampilkanData yang berfungsi untuk menampilkan data mahasiswa
    public function tampilkanData(){
        // Mengembalikan string yang berisi nama, NIM, dan jurusan
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan <hr>";
    }

    // Method updateJurusan yang berfungsi untuk mengupdate nilai jurusan
    public function updateJurusan($jurusan){
        // Mengubah nilai properti $jurusan dengan nilai yang diberikan melalui parameter $jurusan
        $this->jurusan = $jurusan;
    }

    // Method setnim yang berfungsi untuk mengubah nilai NIM
    public function setnim($nim){
        // Mengubah nilai properti $nim dengan nilai yang diberikan melalui parameter $nim
        $this->nim = $nim;
    }
}

// Membuat objek di $mahasiswa dari kelas Mahasiswa dengan nilai awal untuk nama, NIM, dan jurusan
$mahasiswa = new Mahasiswa("Indra Ajiyanto", "220932982", "Teknik Mesin");

// Menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();

// Mengubah jurusan mahasiswa menjadi Teknik Informatika
$mahasiswa->updateJurusan("Teknik Informatika");

// Menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();

// Mengubah NIM mahasiswa
$mahasiswa->setnim("230102083");

// Menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();

?>

<?php

// Membuat kelas bernama Mahasiswa
class Mahasiswa {
    // Membuat properti public $nama, $nim, dan $jurusan yang dapat diakses dari luar kelas
    public $nama;
    public $nim;
    public $jurusan;

   // method __construct untuk menginisialisasi nilai properti saat objek kelas Mahasiswa dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi properti $nama dengan nilai dari parameter $nama
        $this->nama = $nama;
        // Inisialisasi properti $nim dengan nilai dari parameter $nim
        $this->nim = $nim;
        // Inisialisasi properti $jurusan dengan nilai dari parameter $jurusan
        $this->jurusan = $jurusan;
    }

    // method tampilkanData untuk menampilkan informasi mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang menampilkan data mahasiswa
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}

// Membuat objek di $mahasiswa dari class Mahasiswa dengan nilai awal untuk nama, nim, dan jurusan
$mahasiswa = new Mahasiswa("Indra Ajiyanto", "230102083", "Teknik Informtika");

// Menampilkan data mahasiswa menggunakan method tampilkanData() pada objek $mahasiswa
echo $mahasiswa->tampilkanData();

?>

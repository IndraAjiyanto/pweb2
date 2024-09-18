<?php

// membuat kelas bernama Pengguna
class Pengguna {
    // Membuat properti private $nama yang hanya dapat diakses di dalam kelas pengguna saja
    private $nama;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Pengguna dibuat
    public function __construct($nama) {
        // Menginisialisasi properti $nama dengan nilai yang diterima dari parameter
        $this->nama = $nama;
    }

    // method getNama digunakan untuk mengembalikan nilai properti $nama
    public function getNama() {
        return $this->nama;
    }
}

// membuat kelas bernama Dosen yang mewarisi dari kelas Pengguna
class Dosen extends Pengguna {
    // Membuat properti public $mataKuliah yang bisa diakses diluar kelas
    public $mataKuliah;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Dosen dibuat
    public function __construct($nama, $mataKuliah) {
        // Memanggil method __construct dari class induk Pengguna untuk menginisialisasi properti $nama
        parent::__construct($nama);
        // Menginisialisasi properti $mataKuliah dengan nilai yang diterima dari parameter
        $this->mataKuliah = $mataKuliah;
    }

    // method tampilDataDosen yang digunakan untuk menampilkan informasi dosen
    public function tampilDataDosen() {
        // parent::getNama() untuk mengambil nama dari class induk
        // Mengembalikan string dengan informasi nama dosen dan mata kuliah
        return "Nama : " . parent::getNama() . "<br> Mata Kuliah : " . $this->mataKuliah;
    }
}

// Membuat objek di $dosen dari class Dosen dengan nilai awal untuk nama dan mataKuliah
$dosen = new Dosen("Indra Ajiyanto", "Pemrograman");

// Menampilkan data dosen dengan memanggil method tampilDataDosen pada objek $dosen
echo $dosen->tampilDataDosen();

?>

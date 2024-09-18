<?php

// memebuat abstrack kelas bernama Pengguna
abstract class Pengguna{
    // membuat properti private $nama yang hanya bisa diakses di dalam kelas ini
    private $nama;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Pengguna dibuat
    public function __construct($nama){
        // Mengatur nilai properti $nama
        $this->nama = $nama;
    }

    // Method getNama yang digunkan untuk mengambil nilai $nama
    public function getNama(){
        // Mengembalikan nilai $nama
        return $this->nama;
    }

    // Method abstrak aksesFitur yang harus diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

// membuat kelas bernama Dosen yang extends dari kelas Pengguna
class Dosen extends Pengguna{
    // membuat properti publik $mataKuliah yang bisa diakses diluar kelas Dosen
    public $mataKuliah;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Dosen dibuat
    public function __construct($nama, $mataKuliah){
        // Memanggil method __construct dari kelas Pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        // Mengatur nilai properti mata kuliah
        $this->mataKuliah = $mataKuliah;
    }

    // method aksesFitur yang di-override dari kelas Pengguna
    public function aksesFitur(){
        // Mengembalikan informasi dosen yang mencakup nama dan mata kuliah
        return "Dosen : <br> Nama : ".parent::getNama()." <br> Matakuliah : ".$this->mataKuliah."<br><hr>";
    }
}

// membuat kelas bernama Mahasiswa yang extends dari Pengguna
class Mahasiswa extends Pengguna{
    // membuat properti publik $semester yang bisa diakses di luar kelas Mahasiswa
    public $semester;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Dosen dibuat
    public function __construct($nama, $semester){
        // Memanggil method __construct dari kelas Pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        // Mengatur nilai properti semester
        $this->semester = $semester;
    }

    // method aksesFitur yang di-override dari kelas Pengguna
    public function aksesFitur(){
        // Mengembalikan informasi mahasiswa yang mencakup nama dan semester
        return "Mahasiswa : <br> Nama : ".parent::getNama()." <br> Semester : ".$this->semester."<br><hr>";
    }
}

// Membuat objek di $dosen dari kelas Dosen dengan nama "Indra" dan mata kuliah "Progamming"
$dosen = new Dosen("Indra", "Progamming");
// memanggil method aksesFitur dari kelas Dosen
echo $dosen->aksesFitur();

// Membuat objek di $mahasiswa dari kelas Mahasiswa dengan nama "Indra Ajiyanto" dan semester "3"
$mahasiswa = new Mahasiswa("Indra Ajiyanto", "3");
// memanggil method aksesFitur dari kelas Mahasiswa
echo $mahasiswa->aksesFitur();

?>

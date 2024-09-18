<?php

// Kelas dasar Person yang menyimpan informasi nama
class Person {
    private $name;

    // Konstruktor untuk inisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Method untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {
    private $nim;

    // Konstruktor untuk inisialisasi nama dan NIM
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Method untuk mendapatkan informasi peran mahasiswa
    public function getRole() {
        return "Saya mahasiswa bernama: " . $this->getName() . " dengan NIM: " . $this->nim . "<br><hr>";
    }
}

// Kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {
    private $nidn;

    // Konstruktor untuk inisialisasi nama dan NIDN
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Method untuk mendapatkan informasi peran dosen
    public function getRole() {
        return "Saya dosen bernama: " . $this->getName() . " dengan NIDN: " . $this->nidn . "<br><hr>";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;
    protected $halaman;

    // Konstruktor untuk inisialisasi judul dan halaman
    public function __construct($judul, $halaman) {
        $this->judul = $judul;
        $this->halaman = $halaman;
    }

    // Metode abstrak untuk pengajuan jurnal
    abstract public function pengajuanJurnal();
}

// Kelas JurnalDosen yang merupakan turunan dari Jurnal
class JurnalDosen extends Jurnal {
    // Method untuk mengajukan jurnal dosen
    public function pengajuanJurnal() {
        return "Pengajuan Jurnal Dosen <br> Judul: " . $this->judul . "<br> Halaman: " . $this->halaman . "<br><hr>";
    }
}

// Kelas JurnalMahasiswa yang merupakan turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    // Method untuk mengajukan jurnal mahasiswa
    public function pengajuanJurnal() {
        return "Pengajuan Jurnal Mahasiswa <br> Judul: " . $this->judul . "<br> Halaman: " . $this->halaman . "<br><hr>";
    }
}

// Penggunaan kelas
$mahasiswa = new Mahasiswa("Indra", "230102083");
$dosen = new Dosen("Aji", "230102737");

// Menampilkan informasi mahasiswa dan dosen
echo $mahasiswa->getRole();
echo $dosen->getRole();

// Membuat objek jurnal dan menampilkan pengajuan jurnal
$dosenJurnal = new JurnalDosen("WPU", "23");
$mahasiswaJurnal = new JurnalMahasiswa("Revou", "21");

echo $dosenJurnal->pengajuanJurnal();
echo $mahasiswaJurnal->pengajuanJurnal();

?>

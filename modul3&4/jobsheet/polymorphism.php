<?php

// membuat kelas bernama Pengguna
class Pengguna{
    // membuat properti private $nama yang hanya bisa diakses di dalam kelas ini
    private $nama;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Pengguna dibuat
    public function __construct($nama){
        // Mengatur nilai properti $nama dengan nilai parameter yang diterima
        $this->nama = $nama;
    }

    // method getNama yang digunakan untuk mengambil nilai properti $nama
    public function getNama(){
        // Mengembalikan nilai $nama
        return $this->nama;
    }

    // membuat method bernama aksesFitur
    public function aksesFitur(){
        // Mengembalikan teks dengan menyertakan nama pengguna
        return "Nama : $this->nama<br><hr>";
    }
}

// membuat kelas bernama Dosen yang extends dari kelas Pengguna
class Dosen extends Pengguna{
    // membuat properti publik yang bisa diakses dari luar kelas
    public $mataKuliah;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Dosen dibuat
    public function __construct($nama, $mataKuliah){
        // Memanggil method __construct dari kelas Pengguna untuk menginisialisasi $nama
        parent::__construct($nama);
        // Mengatur nilai properti $mataKuliah
        $this->mataKuliah = $mataKuliah;
    }

    // Method aksesFitur yang di-override dari kelas Pengguna
    public function aksesFitur(){
        // Mengembalikan informasi dosen yang mencakup nama dan mata kuliah
        return "Dosen : <br> Nama : ".parent::getNama()." <br> Matakuliah : ".$this->mataKuliah."<br><hr>";
    }
}

// membuat kelas Mahasiswa yang extends dari kelas Pengguna
class Mahasiswa extends Pengguna{
    // membuat properti publik yang bisa dikases dari luar kelas
    public $semester;

    // method __construct untuk menginisialisasi nilai properti saat objek kelas Mahasiswa dibuat
    public function __construct($nama, $semester){
        // Memanggil method __construct dari kelas Pengguna untuk menginisialisasi $nama
        parent::__construct($nama);
        // Mengatur nilai properti $semester
        $this->semester = $semester;
    }
    
    // Method aksesFitur yang di-override dari kelas Pengguna
    public function aksesFitur(){
        // Mengembalikan informasi mahasiswa yang mencakup nama dan semester
        return "Mahasiswa : <br> Nama : ".parent::getNama()." <br> Semester : ".$this->semester."<br><hr>";
    }
}

// Membuat objek dari kelas Pengguna dengan nama "Aji"
$pengguna = new Pengguna("Aji");
// memanggil method aksesFitur dari kelas Pengguna
echo $pengguna->aksesFitur();

// Membuat objek dari kelas Dosen dengan nama "Indra" dan mata kuliah "Progamming"
$dosen = new Dosen("Indra", "Progamming");
// memanggil method aksesFitur dari kelas Dosen
echo $dosen->aksesFitur();

// Membuat objek dari kelas Mahasiswa dengan nama "Indra Ajiyanto" dan semester 3
$mahasiswa = new Mahasiswa("Indra Ajiyanto", "3");
// memanggil method aksesFitur dari kelas Mahasiswa
echo $mahasiswa->aksesFitur();

?>

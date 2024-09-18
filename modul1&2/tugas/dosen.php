<?php

// Membuat kelas bernama Dosen
class Dosen {
    // Membuat properti public $nama, $nip, dan $jurusan yang dapat diakses dari luar kelas
    public $nama;
    public $nip;
    public $jurusan;

    // method __construct yang digunakan untuk menginisialisasi nilai dari properti saat objek dibuat.
    public function __construct($nama, $nip, $jurusan) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->jurusan = $jurusan;
    }

    // method tampilkanDosen yang digunakan untuk menampilkan informasi dari dosen.
    public function tampilkanDosen() {
        return "Nama: {$this->nama} <br> NIP: {$this->nip} <br> Jurusan: {$this->jurusan}";
    }
}

// Pembuatan objek baru dari kelas Dosen dengan parameter nama, nip, dan jurusan.
$dosen = new Dosen("Indra Ajiyanto", "230102083", "Teknik Informatika");

// Memanggil metode tampilkanDosen untuk menampilkan informasi dosen.
echo $dosen->tampilkanDosen();

?>
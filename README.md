# Pengenalan OOP di PHP
<a href ="modul1&2">modul 1 dan 2 :</a>
<ul>
    <li><a href ="modul1&2/jobsheet">Jobsheet Modul 1 dan 2</a></li>
    <li><a href ="modul1&2/tugas">Tugas Modul 1 dan 2</a></li>
</ul>

<a href ="modul3&4">modul 3 dan 4 :</a>
<ul>
    <li><a href ="modul1&2/jobsheet/mahasiswa.php">Jobsheet Modul 1 dan 2</a></li>
    <li><a href ="modul1&2/tugas/dosen.php">Tugas Modul 1 dan 2</a></li>
</ul>


## Apa itu OOP?

Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.

## CLASS
<ul>
<li>Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek.</li>
<li>Atribut atau properties adalah variabel yang menyimpan data untuk objek.</li>
<li>Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
objek.</li>
</ul>

### Contoh CLASS :

```php
<?php

// Membuat kelas bernama Dosen
class Dosen {

}

?>
```
### Contoh Atribut :

```php
<?php
    public $nama;
    public $nip;
    public $jurusan;
?>
```
### Contoh Method :

```php
<?php

    public function tampilkanDosen() {
        return "Nama: {$this->nama} <br> NIP: {$this->nip} <br> Jurusan: {$this->jurusan}";
    }

?>
```


## OBJEK (OBJECT)
<ul>
<li>Instansiasi dari kelas.</li>
<li>Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.</li></ul>

### Contoh OBJECT :

```php
<?php

// Membuat object
$dosen = new Dosen("Indra Ajiyanto", "230102083", "Teknik Informatika");

?>
```


## Konsep Utama OOP

### 1. Inheritance (Pewarisan)

Inheritance adalah mekanisme di mana sebuah kelas dapat mewarisi properti dan metode dari kelas lain. Dengan pewarisan, kita dapat menciptakan hierarki kelas yang mengurangi duplikasi kode.<br>

**Contoh:**

```php
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
```

kjanjhsdcsd

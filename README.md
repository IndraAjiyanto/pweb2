# Pengenalan OOP di PHP
<a href ="modul1&2">modul 1 dan 2 :</a>
<ul>
    <li><a href ="modul1&2/jobsheet">Jobsheet Modul 1 dan 2</a></li>
    <li><a href ="modul1&2/tugas">Tugas Modul 1 dan 2</a></li>
</ul>

<a href ="modul3&4">modul 3 dan 4 :</a>
<ul>
    <li><a href ="modul3&4/jobsheet/mahasiswa.php">Jobsheet Modul 1 dan 2</a></li>
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

<p>Inheritance adalah mekanisme di mana sebuah kelas dapat mewarisi properti dan metode dari kelas lain. Dengan pewarisan, kita dapat menciptakan hierarki kelas yang mengurangi duplikasi kode.</p>

### 2. Polymorphism (Polimorfisme)

<p>Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.</p>

### 3. Encapsulation (Enkapsulasi)

<p>Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.</p>

### 4. Abstraction (Pewarisan)

<p>Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.</p>

# Modul 1 dan 2
## Jobsheet 1
mahasiswa.php :
```php
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

```
output : 
![image](https://github.com/user-attachments/assets/9128a40f-040c-4620-b2ec-416ec8b44f04)

## TUGAS 
dosen.php :
```php
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
```
<p>output :</p>

![image](https://github.com/user-attachments/assets/4b18d2f9-68d3-4892-9fe0-34bd5c456e43)

# Modul 3 dan 4
## Jobsheet 2
mahasiswa.php :
```php
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

```
<p>output :</p>
    
![image](https://github.com/user-attachments/assets/bdb2aeb0-2e34-4ddf-8b80-c4c3759cb014)

encapsulation.php :
```php
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

```
<p>output :</p>
    
![image](https://github.com/user-attachments/assets/d069f001-e9f7-42e9-a9d2-caf0de232ef6)"

inheritance.php :
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

<p>output :</p>

![image](https://github.com/user-attachments/assets/9449f039-38a4-4870-b75a-e82fc94dd661)

polymorphism.php :
```php
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

```
<p>output :</p>

![image](https://github.com/user-attachments/assets/3c7c0a65-e628-4de8-ba03-71a7e1184699)

abstraction.php :
```php
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

```

<p>output :</p>

![image](https://github.com/user-attachments/assets/cb3d4d29-0aa4-44bd-8bc2-db8e95374827)


# Modul 5 dan 6
## Jobsheet 3
inheritance.php :
```php
<?php

// membuat kelas bernama Person
class Person{
    // membuat properti private $name yang hanya bisa diakses dari dalam kelas ini saja
    private $name;

    // Method __construct untuk menginisialisasi nilai properti saat objek Person dibuat
    public function __construct($name){
        // Mengatur nilai properti $name dengan nilai parameter yang diterima
        $this->name = $name;
    }

    // Method getName yang digunkan untuk mengembalikan nilai properti $name
    public function getName(){
        // Mengembalikan nilai $name
        return $this->name;
    }
}

// membuat kelas Student yang extends dari kelas Person
class Student extends Person{
    // membuat properti publik $studentID yang bisa diakses diluar kelas Student
    public $studentID;

    // method __construct yang digunakan untuk mengatur nilai properti $studentID saat objek Student dibuat
    public function __construct($studentID){
        // Mengatur nilai properti $studentID dengan nilai parameter yang diterima
        $this->studentID = $studentID;
    }

    // Method getStudentID yang digunkan untuk mengembalikan nilai $studentID
    public function getStudentID(){
        // Mengembalikan nilai properti $studentID
        return $this->studentID;
    }
}

// membuat objek di $person dari kelas Person dengan nilai Indra
$person = new Person("Indra");
// memanggil method getName dari objek $person
echo $person->getName()."<br>";
// membuat objek di $student dari kelas Student dengan nilai 230102083
$student = new Student("230102083");
// memanggil method getStudentID dari objek $student
echo $student->getStudentID();

?>
```
<p>output :</p>

![image](https://github.com/user-attachments/assets/3d361d56-9bdb-42c7-8a57-20cc0f2de447)

polymorphism.php :
```php
<?php

// membuat kelas bernama Person
class Person{
    // membuat properti private $name yang hanya bisa diakses dari dalam kelas ini saja
    private $name;

    // Method __construct untuk menginisialisasi nilai properti saat objek Person dibuat
    public function __construct($name){
        // Mengatur nilai properti $name dengan nilai parameter yang diterima
        $this->name = $name;
    }

    // Method getName yang digunkan untuk mengembalikan nilai properti $name
    public function getName(){
        // Mengembalikan nilai $name
        return $this->name;
    }
}

// membuat kelas Student yang extends dari kelas Person
class Student extends Person{
    // membuat properti public $studentID yang bisa diakses diluar kelas Student
    public $studentID;

    // method __construct yang digunakan untuk mengatur nilai properti $studentID saat objek Student dibuat
    public function __construct($studentID){
        // Mengatur nilai properti $studentID dengan nilai parameter yang diterima
        $this->studentID = $studentID;
    }

    // method setName yang digunkan untuk mengatur nilai nama 
    public function setName($name){
        // Memanggil method __construct dari kelas Person untuk menginisialisasi name
        parent::__construct($name);
    }

    // Method getStudentID yang digunkan untuk mengembalikan nilai $studentID
    public function getStudentID(){
        // Mengembalikan nilai properti $studentID
        return $this->studentID;
    }

    // Method getName yang meng-override method dari kelas Person
    public function getName(){
        // Mengembalikan teks dengan nama siswa 
        return "Saya siswa bernama : ".parent::getName();
    }
}

// membuat kelas bernama Teacher yang extends dari kelas Person
class Teacher extends Person{
    // membuat properti public $teacherID yang bisa diakses diluar kelas Teacher
    public $teacherID;

     // method __construct yang digunakan untuk mengatur nilai properti $teacherID saat objek Teacher dibuat
     public function __construct($teacherID){
        // Mengatur nilai properti $teacherID dengan nilai parameter yang diterima
        $this->teacherID = $teacherID;
    }

    // Method getteacherID yang digunakan untuk mengembalikan nilai $teacherID
    public function getteacherID(){
        // Mengembalikan nilai properti $teacherID
        return $this->teacherID;
    }

    // method setName yang digunkan untuk mengatur nilai nama 
    public function setName($name){
        // Memanggil method __construct dari kelas Person untuk menginisialisasi name
        parent::__construct($name);
    }

    // Method getName yang meng-override method dari kelas Person
    public function getName(){
        // Mengembalikan teks dengan nama guru 
        return "Saya guru bernama : ".parent::getName();
    }
}

$student = new Student("230102083");
$student->setName("Indra");
echo $student->getName()."<br>";
echo $student->getStudentID()."<br>";

$teacher = new Teacher("230397262");
$teacher->setName("Aji");
echo $teacher->getName()."<br>";
echo $teacher->getteacherID()."<br>";

?>

```

<p>output :</p>

![image](https://github.com/user-attachments/assets/359a42a4-4f94-4ff1-aa27-3c3835a54710)

encapsulation.php :
```php
<?php

// membuat kelas bernama Person
class Person{
    // membuat properti private $name yang hanya bisa diakses didalam kelas Person 
    private $name;

    // Method __construct untuk menginisialisasi nilai properti saat objek Person dibuat
    public function __construct($name){
        // Mengatur nilai properti $name dengan nilai parameter yang diterima
        $this->name = $name;
    }

    // Method getName yang digunkan untuk mengembalikan nilai properti $name
    public function getName(){
        // Mengembalikan nilai $name
        return $this->name;
    }
}

// membuat kelas Student yang extends dari kelas Person
class Student extends Person{
    // membuat properti private $studentID dan $name yang hanya bisa diakses didalam kelas Student
    private $studentID;
    private $name;

    // method __construct yang harus ada, karena jika tidak ada akan error  
    public function __construct(){

    }

    // method setStudentID yang digunakan untuk mengatur nilai properti $studentID
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }

    // Method getStudentID yang digunkan untuk mengembalikan nilai $studentID
    public function getStudentID(){
        // Mengembalikan nilai properti $studentID
        return $this->studentID;
    }

    // method setName yang digunakan untuk mengatur nilai properti $name
    public function setName($name){
        $this->name = $name;
    }

    // Method getName yang meng-override method dari kelas Person
    public function getName(){
        // Mengembalikan teks dengan nama siswa 
        return $this->name;
    }
}

// membuat kelas bernama Teacher yang extends dari kelas Person
class Teacher extends Person{
    // membuat properti public $teacherID yang bisa diakses diluar kelas Teacher
    public $teacherID;

     // method __construct yang digunakan untuk mengatur nilai properti $teacherID saat objek Teacher dibuat
     public function __construct($teacherID){
        // Mengatur nilai properti $teacherID dengan nilai parameter yang diterima
        $this->teacherID = $teacherID;
    }

    // Method getteacherID yang digunakan untuk mengembalikan nilai $teacherID
    public function getteacherID(){
        // Mengembalikan nilai properti $teacherID
        return $this->teacherID;
    }

    // method setName yang digunkan untuk mengatur nilai nama 
    public function setName($name){
        // Memanggil method __construct dari kelas Person untuk menginisialisasi name
        parent::__construct($name);
    }

    // Method getName yang meng-override method dari kelas Person
    public function getName(){
        // Mengembalikan teks dengan nama guru 
        return "Saya guru bernama : ".parent::getName();
    }
}

$student = new Student();
$student->setName("Indra"); 
echo $student->getName()."<br>";
$student->setStudentID("230102083"); 
echo $student->getStudentID(); 

?>
```
<p>output :</p>

![image](https://github.com/user-attachments/assets/802c6e7f-b2fa-4246-a6f8-cfd7053d76d0)

abstraction.php :
```php
<?php

// membuat abstrack kelas bernama Course
abstract class Course{

    // method abtrack yang bernama getCourseDetails
    abstract public function getCourseDetails();
}

// membuat kelas yang bernama OnlineCourse yang extends ke kelas Course
class OnlineCourse extends Course{
    // Membuat properti public $cousre yang dapat diakses di luar kelas
    public $course;

    // method __construct yang digunakan untuk mengatur nilai properti $course saat objek OnlineCourse dibuat
    public function __construct($course){
        $this->course = $course;
    }

    // method getCourseDetails yang digunkan untuk menmapilkan detail dari OnlineCourse
    public function getCourseDetails(){
        return "online course : ".$this->course."<br>";
    }
}

// membuat kelas yang bernama OnlineCourse yang extends ke kelas Course
class OfflineCourse extends Course{
    // Membuat properti public $cousre yang dapat diakses di luar kelas
    public $course;

    // method __construct yang digunakan untuk mengatur nilai properti $course saat objek OnlineCourse dibuat
    public function __construct($course){
        $this->course = $course;
    }

    // method getCourseDetails yang digunkan untuk menmapilkan detail dari OfflineCourse
    public function getCourseDetails(){
        return "online course : ".$this->course."<br>";
    }
}

$onlineCourse = new OnlineCourse("WPU");
echo $onlineCourse->getCourseDetails();
$offlineCourse = new OfflineCourse("Revou");
echo $offlineCourse->getCourseDetails();

?>
```
<p>output :</p>

![image](https://github.com/user-attachments/assets/db25f499-c273-4f56-8a94-39bbf872d8c0)

## TUGAS
mahasiswa.php :
```php
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

```

<p>output :</p>

![image](https://github.com/user-attachments/assets/353bc8f3-ed73-440c-97d2-7200c9d7689f)

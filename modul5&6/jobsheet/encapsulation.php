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
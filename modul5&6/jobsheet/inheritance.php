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
    private $studentID;

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
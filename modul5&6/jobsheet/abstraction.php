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
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

    // method getCourseDetails yang digunkan untuk menmapilkan detail dari OnlineCourse
    public function getCourseDetails(){
        
    }
}

// membuat kelas yang bernama OnlineCourse yang extends ke kelas Course
class OfflineCourse extends Course{
    // Membuat properti public $cousre yang dapat diakses di luar kelas
    public $course;

    // method getCourseDetails yang digunkan untuk menmapilkan detail dari OnlineCourse
    public function getCourseDetails(){
        
    }
}
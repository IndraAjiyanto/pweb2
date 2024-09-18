<?php

class Person{
    private $name;

    public function __construct($name){

    }

    public function getRole(){
        return $this->name;
    }

}

class Mahasiswa extends Person{
    private $nim;

    public function getRole(){
        echo "Saya mahasiswa bernama : ".parent::getRole()." dengan nim : ".$this->nim."<br>";
    }

}

class Dosne extends Person{
    private $nidn;

    public function getRole(){
        echo "Saya dosen bernama : ".parent::getRole()." dengan nidn : ".$this->nidn."<br>";
    }

}

abstract class Jurnal{}



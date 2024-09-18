# Pengenalan OOP di PHP

## Apa itu OOP?

Pemrograman Berorientasi Objek (OOP) adalah paradigma pemrograman yang menggunakan objek untuk mendesain aplikasi dan program. OOP membantu kita dalam mengorganisir kode dan membuatnya lebih modular dan mudah dipelihara. Dalam PHP, OOP menawarkan berbagai konsep penting yang memungkinkan kita untuk membuat aplikasi yang lebih kompleks dan terstruktur.

## Konsep Utama OOP

### 1. Inheritance (Pewarisan)

Inheritance adalah mekanisme di mana sebuah kelas dapat mewarisi properti dan metode dari kelas lain. Dengan pewarisan, kita dapat menciptakan hierarki kelas yang mengurangi duplikasi kode.<br>
contoh penerapan pada Inheriten :
<a href="modul1&2/jobsheet/inheriten.php">Jobsheet 1</a>

**Contoh:**

```php
class Animal {
    public function speak() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->speak(); // Output: Bark
```

kjanjhsdcsd

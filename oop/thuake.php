<?php
class So1 {
    public $thuoctinh1;
    public function show() {
        echo "gggg";
    }
}

class So2 extends So1 {
}

$doituong = new So2();

$doituong->show();


class Animal {
    public $ten ='default';
    public $tuoi = 'default';
    function __construct($name) {
        $this->ten = $name;
    }
}

class Cat extends Animal {
    public function batchuot(){
        echo "con meo ".$this->ten .  "bat chuot";
    }
    function __construct() {
        parent::__construct('dat len');
    }
}

class Dog extends Animal {
    public function boi(){
        echo "con cho ".$this->ten .  "dang boi";
    }
}

$cat = new Cat('mun');
$cat->batchuot();
// $animal = new Animal();
// $animal->name = 'ggg';
// $animal->batchuot();
?>

bai tap: tao class Human
- tao class HocVien va GiangVien con cua class human
- class GiangVien se co thao tac diem danh
- class HocVien se co thao tac hoi

<?php
include("Class/HocVien.php");
include("Class/GiangVien.php");

$hocvien = new HocVien('A','15','2020-05-20');
$hocvien->gioithieu();
$hocvien->HoiBai();

$giangvien = new GiangVien('A','15','2020-05-20');
$giangvien->gioithieu();
$giangvien->Diemdanh();
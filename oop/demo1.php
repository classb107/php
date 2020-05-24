<?php 
function pheptoan($a, $b) {
    echo "<br/>";
    echo ($a+ $b);
}

pheptoan(3,5);
pheptoan(4,9);
pheptoan(14,9);
pheptoan(14,6);
pheptoan(5,2);

class HocSinh
{
    public $name = '';
    public $gender = '';
    public $age = 0;

    public function showthongtin() {
        echo "<br/>ten la:". $this->name;
        echo "<br/>gioi tinh la:". $this->gender;
        echo "<br/>tuoi la:". $this->age;
    }
}

$hocsinhA = new HocSinh();
$hocsinhA->name = 'Nguyen Van A';
$hocsinhA->gender = 'Nam';
$hocsinhA->age = 13;

$hocsinhB = new HocSinh();
$hocsinhB->name = 'Nguyen Van B';
$hocsinhA->gender = 'Nam';
$hocsinhA->age = 15;


$hocsinhA->showthongtin();
$hocsinhB->showthongtin();


class Meo {
    public $maulong = 'trang';
    public $tuoi = '0';
    public $thucanyeuthich = '';
    function __construct($maulong, $tuoi,$thucanyeuthich) {
        $this->maulong = $maulong;
        $this->tuoi = $tuoi;
        $this->thucanyeuthich = $thucanyeuthich;
    }
    public function showthongtin() {
        echo "<br/>con meo cua toi co mau long " . $this->maulong;
        echo "<br/>nam nay no ". $this->tuoi;
        echo "</br> no thich an". $this->thucanyeuthich;
    }
}

$conmeoso1 = new Meo('den',3,'ca');


$conmeoso1->showthongtin();

$conmeoso2 = new Meo('vang', 3, 'banh quy');
$conmeoso2->showthongtin();


?>

bai tap:
- mo ta phong hoc
- gom co hoc sinh, thiet bi
- cho biet hoc sinh nao dang ngoi o ban nao
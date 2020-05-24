<?php
class Human {
    public $ten, $tuoi, $ngaysinh;
    function __construct($ten, $tuoi, $ngaysinh) {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->ngaysinh = $ngaysinh;
    }

    public function gioithieu() {
        echo "<br/> ten la:" . $this->ten 
        . "<br/> tuoi la:" . $this->tuoi;
    }
}
?>
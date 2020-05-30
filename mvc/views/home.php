<?php
class Home {
    public $dsSinhVien;
    function __construct($dsSinhVien) {
        $this->dsSinhVien = $dsSinhVien;
    }
    public function display() {
        echo "day la trang home";
        echo "<pre>";
        print_r($this->dsSinhVien);
    }
}
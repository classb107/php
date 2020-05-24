<?php
include_once("Human.php");
class GiangVien extends Human {
    public function Diemdanh() {
        echo "<br/> Giang Vien ".$this->ten . "dang diem danh";
    }
}
?>
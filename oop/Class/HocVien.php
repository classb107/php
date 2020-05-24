<?php
include_once("Human.php");
class HocVien extends Human {
    public function HoiBai() {
        echo "<br/> Hoc Vien ".$this->ten . "muon hoi bai";
    }
}
?>
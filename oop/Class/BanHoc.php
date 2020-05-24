<?php 
class BanHoc {
    public $maytinh = 1;
    public $banphim = 1;
    public $ghe = 1;
    public $vitri = 0;
    public $sv;

    function __construct($vitri,$maytinh,$banphim,$ghe,$sinhvien) {
        $this->maytinh = $maytinh;
        $this->banphim = $banphim;
        $this->ghe = $ghe;
        $this->vitri = $vitri;
        $this->sv = $sinhvien;
    }
}
?>
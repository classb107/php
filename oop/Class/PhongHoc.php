<?php 
class PhongHoc {
    public $maPhong = '';
    public $soBanToiDa = 0;
    public $danhSachBan;

    function __construct($maPhong,$soBanToiDa,$danhSachBan) {
        $this->maPhong = $maPhong;
        $this->soBanToiDa = $soBanToiDa;
        $this->danhSachBan = $danhSachBan;
    }

    function mota() {
        echo "day la phong hoc:". $this->maPhong . '<br/>';
        echo "so hoc sinh toi da la:" . $this->soBanToiDa . '<br/>';
        foreach($this->danhSachBan as $ban) {
            echo "ban so " . $ban->vitri
            . 'danh sach thiet bi:'. ' </br>'.
            'may tinh:'.($ban->maytinh ? 'co' : 'ko') . ' <br/>'.
            'ghe:'.($ban->ghe ? 'co': 'ko') . ' <br/>';
        }
    }
}
?>
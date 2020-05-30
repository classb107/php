<?php
class TimKiem {
    
    function __construct() {
        
    }
    public function display() {
        echo "day la trang tim kiem";
        echo "<form method='get' action=''>";
        echo "nhap ten Giang Vien:";
        echo "<input name = 'ten'>";
        echo "<input type = 'submit' name='submit' value='submit'>";
        echo "</form>";
    }

    public function dsSinhVien($ds) {
        foreach($ds as $sinhvien) {
            echo "ten la:" . $sinhvien['ten'];
        }
    }
}
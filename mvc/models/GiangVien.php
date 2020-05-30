<?php
include_once('BaseModel.php');
include_once('Lop.php');
include_once('SinhVien.php');
class GiangVien extends BaseModel
{
    public $id;
    public $ten;
    public $tuoi;
    public $gioitinh;
    function __construct() {
        parent::__construct();
        $this->table = 'giangvien';
    }

    static public function timkiem($name) {
        $giangvien = self::timkiemtheoten($name);
        if(!count($giangvien)) {
            echo " ten giang vien khong dung";
            die();
        }
        $idGiangVien = $giangvien[0]['id'];
        $lopModel = new Lop();
        $dsLop = $lopModel->tkIdGiangVien($idGiangVien);
        $svModel = new SinhVien();
        $dsSv = [];
        foreach($dsLop as $lop) {
            $result = $svModel->tktheolop($lop['id']);
            foreach($result as $item) {
                $dsSv[] = $item;
            }
        }
        return $dsSv;
    }

    static public function timkiemtheoten($name) {
        $table = 'giangvien';
        $conn = self::connectStatic();
        $sql = "SELECT * FROM " . $table
                . " WHERE ten = '" . $name . "'";
        $resultQuery = $conn->query($sql);
        $result = [];
        if ($resultQuery) {
            // output data of each row
            while($row = $resultQuery->fetch_assoc()) {
                $result[] = $row;
            }
        }
        return $result;
    }
}
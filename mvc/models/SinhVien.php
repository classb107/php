<?php
include_once('BaseModel.php');
class SinhVien extends BaseModel
{
    public $id;
    public $ten;
    public $tuoi;
    public $gioitinh;
    function __construct() {
        parent::__construct();
        $this->table = 'sinhvien';
    }
    public function tktheolop($id_lop) {
        $this->connect();
        $sql = "SELECT * FROM " . $this->table
        . " WHERE id_class = '" . $id_lop . "'";
        $resultQuery = $this->conn->query($sql);
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
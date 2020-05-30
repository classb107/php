<?php
include_once('BaseModel.php');
class Lop extends BaseModel
{
    function __construct() {
        parent::__construct();
        $this->table = 'lop';
    }

    public function tkIdGiangVien($idGiangVien) {
        $this->connect();
        $sql = "SELECT * FROM " . $this->table
        . " WHERE id_giangvien = '" . $idGiangVien . "'";
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
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
}
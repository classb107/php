<?php
include_once('BaseModel.php');
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
}
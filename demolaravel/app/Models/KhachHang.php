<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khachhang';
    protected $primaryKey = 'id';
    public $timestamps = false;
    //khai bao nhung column tren table
    protected $fillable = ['ten', 'sdt', 'ngaymuahang'];
    //
}
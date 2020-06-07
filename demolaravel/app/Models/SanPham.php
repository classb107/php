<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id';
    public $timestamps = false;
    //khai bao nhung column tren table
    protected $fillable = ['ten', 'gia', 'soluong'];
    //
}
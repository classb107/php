<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;

class KhachHangController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $model = new KhachHang();
        $result = $model->get();
        echo "<pre>";
        dd($result);
            // return view('home');
    }
    public function themKH() {
        $newRecord = ['ten' => 'KH2', 
                        'sdt' => '0938333222',
                        'ngaymuahang' => '2020-05-14'
                    ];
        $result = KhachHang::create($newRecord);
        if($result) {
            echo " insert thanh cong";
        }
    }

    public function xoaKH() {
        $result = KhachHang::where('ten','=','KH2')->delete();
        if($result) {
            echo " xoa thanh cong";
        } else {
            echo " khong xoa duoc";
        }
    }

    public function suaKH() {
        $result = KhachHang::where('ten','=','KH2')
                    ->update(['ten'=> 'KH5']);
        if($result) {
            echo " update thanh cong";
        } else {
            echo " khong update duoc";
        }
    }

    public function timkiemKH() {
        $model = new KhachHang();
        $result = $model->where('ngaymuahang','<','2020-05-14')
                    ->where('ten','like','Tran%')->get();
        dd($result);
    }
}

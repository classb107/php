<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
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
        
        $model = new SanPham();
        //get : lay toan bo du lieu
        //get tuong ung voi select
        $result = $model->get();

        //first : lay dong dau dien
        $result = $model->first();

        //dua du lieu vao database dung ham create
        // luu y phai khai bao cac column fillable o model truoc
        $newRecord = ['ten' => 'sp3', 
                        'gia' => 22,
                        'soluong' => 5
                    ];
        SanPham::create($newRecord);

        //select co dieu kien
        //where tuong ung voi where trong sql
        $result = $model->where('ten','=','sp2')->get();
        dd($result);
            // return view('home');
    }

}

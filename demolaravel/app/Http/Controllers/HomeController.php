<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function demo()
    {
        return view('view1');
    }

    public function trangchu()
    {
        return view('trangchu');
    }
    public function gioithieu()
    {
        return view('gioithieu');
    }
    public function sanpham()
    {
        return view('sanpham');
    }
}

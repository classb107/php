<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use DB;
class TestApiController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('guest');
    }
    public function getTask(Request $request) {
        $result['data'] = DB::table('task')->get();
        $result['status'] = true;
        $result['message'] = 'goi thanh cong';
        return response($result, 200);
    }
    public function saveTask(Request $request) {
        $params = $request->input();
        $insertData = [
            'tentask'=> $params['ten'],
            'mota' => $params['mota'],
            'thoigian' => $params['ngay']
        ];
        $result['data'] = DB::table('task')->insert($insertData);
        $result['status'] = true;
        $result['message'] = 'insert thanh cong';
        return response($result, 200);
    }
    public function test(Request $request) {
        $arr = [
            "book_id" => 3,
            "name" => "text"
        ];
        $result = [
            "key1" => $arr ,
            "key2" => "valu2",
            "key3" => "value3"
        ];
        return response($result);
    }
}

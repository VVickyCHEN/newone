<?php

namespace App\Http\Controllers;

// 使用模型需要添加如下代码
use App\step1;

// 加上这个才能连接数据库
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class TestInputController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(Request $request){
    	
    	$a = $request->input("aa");
        dd($a);
    }
}

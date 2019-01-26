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

class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	
    	$step1 = DB::select("select * from step1 where id='30'");
    	$step1 = $step1['0'];
    	// $title = $step1->title;

    	// $info = step1::find(30); 
    	// dd($info->img);die;

    	// return view('Home/index',compact('title',$title));
    	return view('Home.index',compact('step1',$step1));
    }

    public function tuindex(){
        return view('Home/index');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

// 加上这个才能连接数据库
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('token');
    }
    
    // 如果你想要定义一个只处理一个动作的控制器，可以在这个控制器中定义 __invoke 方法
    public function __invoke()
    {
        return view('user.profile');
    }
}
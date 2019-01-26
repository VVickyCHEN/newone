<?php

namespace App\Http\Controllers\Admin;

// 使用模型需要添加如下代码
use Models\step1;

// 加上这个才能连接数据库
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

// use App\Http\Requests;

// use Request; 

class IndexController extends BaseController 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

       
    	// $user  = DB::table('user')->where('id','0')->value('name');
    	// dd($user);die;

        //$flights = App\Flight::all();

		// foreach ($flights as $flight) {
		//     echo $flight->name;
		// }

        // 根据主键删除
        // $user = user::destroy(1);

        // 根据条件删除
        // $id = 1;
        // $user = User::where('id','>',$id)->delete();
        // dd($user);


        //使用模型的Create方法新增数据
        // $add = ['name'=>'测试三',
        //         'password'=>'123asd',
        //         'createdate'=>'12332234'
        //         ];
        // $user = user::create($add);

        // 新特性系列之新的 URL 生成语法
        // $url = action([IndexController::class, 'index']);
        // dd($url);die;

        // 输出当前目录地址加控制器名称
        // echo url()->current();die;

    	return view('Admin.index');
    }

    public function datatableseditable(){
    	return view('Admin.datatableseditable');
    }

        /*
    @Laravel框架
    @Ajax无刷新分页(简单7步骤)
    */
    public function page(Request $request){
        
        //1、查询数据库总条数
        $count = count(Db::table('step1')->get());
        
        //2、设置每页显示条数
        $rev = '4';
        
        //3、求总页数
        $sums = ceil($count/$rev);
        
        //4、求当前页 -》 需要引入use Illuminate\Http\Request;
        $page = $request->input("page");
        
        if(empty($page)){
            $page = "1";
        }

        //5、设置上一页、下一页
        $prev = ($page-1)>0?$page-1:1;
        $next = ($page+1)<$sums?$page+1:$sums;

        //6、求偏移量
        $offset = ($page-1)*$rev;

        //7、sql查询数据库
        $data = Db::select("select * from step1 limit $offset,$rev");

        //8、数字分页(可有可无)
        $pp = array();

        for($i=1;$i<=$sums;$i++){
            $pp[$i]=$i;
        }

        return view('Admin/page',['data'=>$data,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page]);
    }

    // 分页
    public function datatables(Request $request){

        // Route::get('Admin/datatables', function () {
        //     $pages = App\step1::paginate(15);
        //     $pages->withPath('datatables/url');
        //     //
        // });die;

        // simplePaginate($perPage = null, $columns = ['*'], $pageName = 'page')
        // 其中$perPage表示每页显示数目，$columns表示查询字段，$pageName表示页码名称，页码名称默认为page

        // 没有页面样式的分页
        // $pages = DB::table('step1')->simplePaginate($perPage = '5',$columns = ['title','detail','img','createdate','last_update'],$pageName = 'page');

        // $pages = DB::table('step1')->paginate('1');

        //1、查询数据库总条数
        $data = DB::table('step1')->get();

        //2、设置每页显示条数
        $everypage = '5';

        //3、求总页数
        $sum = ceil(count($data)/$everypage);
        // intval(var)取整
        $sum = intval($sum);

        //4、求当前页如果为空设置为1 -》 需要引入use Illuminate\Http\Request;
        $page = $request->input('page');
        if(empty($page)){
            $page = '1';
        }

        //5、设置上一页、下一页
        $page>1?$prevPage=$page-1:$prevPage=1;  

        $page>=$sum?$nextPage=$sum:$nextPage=$page+1;

        //6、求偏移量并且求出偏移后的数据
        $pian = ($page-1)*$everypage;

        $result = DB::select("select * from step1 limit $pian,$everypage");

        //8、数字分页(可有可无)
        $number = array();
        for($i=1;$i<=$sum;$i++){
            $number[$i] = $i;
        }
        return view('Admin/datatables',['sum'=>$sum,'result'=>$result,'number'=>$number,'nextPage'=>$nextPage,'prevPage'=>$prevPage,'page'=>$page]);
        // return view('Admin/datatables',['pages' => $pages]);
    }

    public function add(Request $request){
        dd('123');die;
    }

    public function upload(){
        
       
        if(request('title')){

            $base64 = request('img');
            dd($base64);die;
            // 起始目录为public下
            $path = 'Admin/img';
       
            // 调用其他控制器的方法
            $common = new CommonController;

            // 返回图片的地址
            $img = $common->base64_image_content($base64,$path);

            // $del = unlink($path.'/'.$filename);

            $post['img'] = $img;

            $post['title'] = request('title');
            $post['detail'] = request('detail');


            // 模型添加数据
            $step1 = step1::create($post);

            //使用模型新增数据
            //$user = new step1();
            //$user-> username = 'haha';
            //$bool = $user->save();
            //dd($bool);

            // 获取上一次添加的主键
            // $id = DB::getPdo()->lastInsertId();

        }

        return view('Admin.upload');
    }

    public function uploadedit($flag){
    
        
        return view('Admin.uploadedit');
    }
        
    



    public function signup(){
        return view('Admin.signup');
    }


}

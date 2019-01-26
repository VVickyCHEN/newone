<?php

namespace App\Http\Controllers;

use App\User;

// 使用模型需要添加如下代码
use App\step1;

// 加上这个才能连接数据库
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Requests;
use Request; 

class CommonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getImage($url,$save_dir='',$filename='',$type=0){
        if(trim($url)==''){
            return array('file_name'=>'','save_path'=>'','error'=>1);
        }
        if(trim($save_dir)==''){
            $save_dir='./';
        }
        if(trim($filename)==''){//保存文件名
            $ext=strrchr($url,'.');
            if($ext!='.gif'&&$ext!='.jpg'){
                return array('file_name'=>'','save_path'=>'','error'=>3);
            }
            $filename=time().$ext;
        }
        if(0!==strrpos($save_dir,'/')){
            $save_dir.='/';
        }
        //创建保存目录
        if(!file_exists($save_dir)){
            mkdir($save_dir,0777,true);
        }
        //获取远程文件所采用的方法
        if($type){
            $ch=curl_init();
            $timeout=5;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $img=curl_exec($ch);
            curl_close($ch);
        }else{
            ob_start();
            readfile($url);
            $img=ob_get_contents();
            ob_end_clean();
        }
        //$size=strlen($img);
        //文件大小
        $fp2=@fopen($save_dir.$filename,'a');
        fwrite($fp2,$img);
        fclose($fp2);
        unset($img,$url);
        return array('file_name'=>$filename,'save_path'=>$save_dir.$filename,'error'=>0);
    }
    
    public function base64_image_content($base64_image_content,$path){
        //匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
            
            // 获取图片类型
            $type = $result[2];

            // 返回储存目录
            $new_file = $path."/".date('Ymd',time())."/";

            if(!file_exists($new_file)){
                // return '没有目录哦';die;
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file,0777,true);
            }

            // 返回文件名（包含后缀）
            $ping_url = mt_rand(0,100).time().".{$type}";
          
            // 返回目录加文件名
            $ftp_image_upload_url = $new_file.$ping_url;
            // return $ftp_image_upload_url;die;


            // $local_file_url = $basePutUrl.$ping_url;

            if (file_put_contents($ftp_image_upload_url, base64_decode(str_replace($result[1], '', $base64_image_content)))){

            return 'public/'.$ftp_image_upload_url;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public function common(){
        return 'common';
    }


}

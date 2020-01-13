<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller
{

    //注册展示页面
    public function reglist(){
        return view('user.reglist');
    }

    //注册执行
    public function reginsert(){
        $data=request()->input();
    }

    //注册接口测试u
    public function reg(){
        //数据
        $url='http://ljpassport.xx20.top/pass/reg';
        $data=[
            'pass_name'=>'lijian',
            'pass_tel'=>'123456789',
            'pass_email'=>'2351584897@qq.com',
            'pass_pwd'=>'123456'
        ];
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_exec($ch);
        curl_close($ch);
    }

    //登录接口测试
    public function login(){
        $url='http://ljpassport.xx20.top/pass/login';
        $data=[
            'name'=>'lijian',
            'pwd'=>'123456'
        ];
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_exec($ch);
        curl_close($ch);
    }

    //调用用户信息接口
    public function userinfo(){
        $url='http://ljpassport.xx20.top/pass/Userinfo?name=zhangsan';
        $token='qXN1YMYDrV2koWtNG6HtSO9l5Ybng5rj';
        $data=[
            'token:'.$token,
        ];
        // 初始化
        $ch = curl_init();
        //设置请求参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$data);        // 自定义HTTP 头
        // 开启会话 发起请求
        $response = curl_exec($ch);
        // 获取错误信息
        $error = curl_error($ch);
        if($error)
        {
            var_dump($error);
            die;
        }
        // 关闭会话
        curl_close($ch);
        //处理响应
        dump(json_decode($response,true));
    }
}

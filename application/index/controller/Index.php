<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\FaceModel;
class Index
{
//    $userController = new userController();
    public function index()
    {
        $info=FaceModel::get(1);
        var_dump($info);
//        $mysql = new mysqli("188.131.235.77", "ubuntu", "Gdc1015439000","lmx" );
//        $info="select * from wx_face_model;";
//        $res=mysqli_query($mysql, $info);
////        $user = D("users");
//        var_dump($info);
        echo 234;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
    public function find(){

        $user = D("users");
        var_dump($user);
    }
    public function insert(){

    }
}
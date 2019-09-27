<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\Num;
use think\Controller;
use think\Loader;
use think\model;
use think\Request;
use think\Validate;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function add(){
        return $this->fetch();
    }

    public function insert(){
//        $data = Request::instance()->param();
//        $data = input('post.');
        $data = [
            'name'=> "ThinkPhp",
            'num' => "13",
        ];
        $validate = Loader::validate('NumValidate');
        $result = $validate->scene('insert')->check($data);
        if(true !== $result){
            return $validate->getError();

        }else{
            $num = model('Num');
            $info = $num->save($data);
            return $info;
        }

    }
    public function show(){
        $info = model('Num')->show();
        return $info;
    }
    public function update(){
//        $name = Request::instance()->param('name');
//        $num = Request::instance()->put('num');
        $data = [
            'name'=> "tp",
            'num' => "34",
        ];
        $validate = Loader::validate('NumValidate');
        $result = $validate->scene('insert')->check($data);
        if($result !== true){
            return $validate->getError();
        }else{
            $info = model("Num")->where('id',5)->update($data);
            return $info;
//            var_dump($info);
        }
    }
    public function delete(){
        $time =time()-86400;
        $info = model('Num')->where('create_time','<',$time)->delete();
        return $info;

    }

}

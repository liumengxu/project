<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\Num;
use think\Controller;

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
        $data = input('post.');
        $num = model('Num');
        $info = $num->save($data);
    }
    public function show(){
        $num = model("Num");
        $list = $num->select();
//        var_dump($volist);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function update(){
        $num = model('Num');
        $data = [
            'name'=> "50",
            'num' => "50",
        ];
        $info = $num ->where('id',5)->update($data);
        var_dump($info);
    }
    public function delete(){
        $num = model('Num');
        $info = $num ->where('id',1)->delete();
        var_dump($info);

    }

}

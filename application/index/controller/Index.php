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

//        echo 22;die;
//        $num = model('Num');
//        $volist = $num->select();
//        $this->assign('volist',$volist);
        return $this->fetch();
    }

    public function insert(){
//        $data = Request::instance()->input();
//        echo $data;
        $data = [
          'name' => "20",
          'num'  => "20",
        ];
        var_dump($data);
        $num = model('Num');
        $info = $num->save($data);
        var_dump($info);

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

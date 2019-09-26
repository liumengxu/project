<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\Num;
class Index
{
    public function index()
    {
        echo 333;
        return $this->fetch();

    }
    public function insert(){
        $data = [
          'name' => "20",
          'num'  => "20",
        ];
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

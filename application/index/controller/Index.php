<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\Num;
class Index
{
//    $userController = new userController();
    public function index()
    {

        $info = Num::select();
        print_r($info);
    }
    public function insert(){
        $info =


    }

}

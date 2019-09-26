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


}

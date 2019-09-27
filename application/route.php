<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['Index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['Index/hello', ['method' => 'post']],
//    ],
//
//];


Route::group('',function(){
    Route::get('Index','Index/Index/Index');
    Route::get('delete','Index/Index/delete');
    Route::get('update','Index/Index/update');
    Route::get('show','Index/Index/show');
    Route::get('insert','Index/Index/insert');
});




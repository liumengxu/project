<?php


namespace app\index\model;


use think\Model;

class Num extends Model
{
    protected $table = 'p_num';

    // 字段合法性检测
    protected $field = true;

    // 自动时间戳
    protected $autoWriteTimestamp = true;

    // 主键
    protected $pk = 'uid';
}
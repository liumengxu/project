<?php
namespace app\index\model;
use think\Model;

class user extends Model{
    // 设置当前模型对应的完整数据表名称

    protected $table = 'wx_users';

    // 字段合法性检测
    protected $field = true;

    // 自动时间戳
    protected $autoWriteTimestamp = true;

    // 主键
    protected $pk = 'uid';


}

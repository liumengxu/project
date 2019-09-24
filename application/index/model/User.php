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

    protected $connection = [
        'type'            => 'mysqli',
        // 服务器地址
        'hostname'        => '188.131.235.77',
        // 数据库名
        'database'        => 'lmx',
        // 用户名
        'username'        => 'ubuntu',
        // 密码
        'password'        => 'Gdc1015439000',
        // 端口
        'hostport'        => '3306',
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => 'think_',
        // 数据库调试模式
        'debug'       => false,
    ];
}

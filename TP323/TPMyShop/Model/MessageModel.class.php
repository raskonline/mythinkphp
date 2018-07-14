<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-14
 * Time: 9:16
 */

namespace Model;


use Think\Model;

class MessageModel extends Model
{
    // 数据表名（不包含表前缀）
    protected $tableName        =   '';
    // 实际数据表名（包含表前缀）
    protected $trueTableName    =   'message';//读取没有表前缀数据表数据

}
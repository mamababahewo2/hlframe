<?php
namespace core\libs;
use core\libs\config;

/**
 * Class log 日志类
 * @package core
 */
class log
{
    static $class;
    /**
     * 1. 确定日志的存储方式
     * 2. 写日志
     */
    static public function init()
    {
        //去掉存储方式
        $drive = config::get("LOG_DRIVE",'log');
        $class = "\core\libs\dirve\log\\".$drive;
        self::$class = new $class;

    }

    static public function logs($name){
        self::$class->log($name);
    }
}
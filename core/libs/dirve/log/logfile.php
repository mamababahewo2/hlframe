<?php
namespace core\libs\dirve\log;

use core\libs\config;

/**
 * Class logfile 日志文件存储
 */
class logfile{
    public $path; //日志存储位置
    public function __construct()
    {
        $this->path = config::get("OPTION",'log')['path'];
    }

    public function log($msg,$file = 'log')
    {
        /**
         * 1. 确定文件是否存在
         * 2. 新建目录
         * 3. 写入日志
         */
        $str = "【".date('Y-m-d H:i:s')."】";
        if (is_array($msg)) {
            $msg = json_encode($msg);
        }

        $msg = $str . $msg;

        if (!is_dir($this->path)){
            mkdir($this->path,'0777',true);
        }

        file_put_contents($this->path."/".$file.".log",$msg . PHP_EOL,FILE_APPEND);
    }
}
<?php
namespace core\libs;
use core\libs\config;

/**
 * Class route 路由
 * @package core
 */
class route{

    public $ctrl;
    public $action;
    public function __construct()
    {
        // xxx.com/index/index
        /**
         * 1. 隐藏index.php
         * 2. 获取url的参数部分
         * 3. 返回对应的控制器和方法
         */
        $path = $_SERVER['REQUEST_URI'];

        if(isset($path) && $path != "/"){
            $patharr = explode("/",trim($path,"/"));
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
                unset($patharr[0]);
            }

            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = config::get("ACTION","route");
            }


            //url多余的部分转换成get
            $count = count($patharr) + 2;
            $i = 2;
            while ($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GET[$patharr[$i]] = $patharr[$i+1];
                }
                $i += 2;
            }

        } else {
            $this->ctrl = config::get("CTRL","route");
            $this->action = config::get("ACTION","route");
        }

    }
}
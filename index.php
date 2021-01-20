<?php
/**
 * 入口文件
 *  1. 定义常量
 *  2. 定义函数库
 *  3. 启动框架
 */

//定义更目录
define("HLROOT",realpath("./"));
//定义核心文件
define("CORE",HLROOT . "/core");
//定义项目目录
define("APP",HLROOT . "/app");

define("MODULE","app");
//定义调试信息
define("DEBUG",true);

//echo APP;exit;

//引入第三方类库
include "vendor/autoload.php";

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set("display_errors","On");
} else {
    ini_set("display_errors","Off");
}

include CORE . '/common/function.php';

include CORE . "/hlframe.php";

spl_autoload_register("\core\hlframe::load");

\core\hlframe::run();

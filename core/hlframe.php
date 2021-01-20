<?php

namespace core;
/**
 * 框架启动文件
 * Class hlframe
 * @package core
 */
class hlframe
{
    public static $classMap = array();
    public $assign;

    /**
     * 程序运行
     */
    static public function run()
    {
        //p("ss");
        header("Content-Type: text/html; charset=utf-8");
        //启动日志
        \core\libs\log::init();
        //\core\libs\log::logs("test");

        //路由
        $route = new \core\libs\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;

        $file = APP."/ctrl/".$ctrlClass."Ctrl.php";
        $c = "\\".MODULE."\ctrl\\".$ctrlClass."Ctrl";

        if(is_file($file)){
            include $file;
            $ctrl = new $c();
            $ctrl->$action();
        } else {
            throw new \Exception("找不到控制器");
        }
        //p($route);
    }

    /**
     * 自动加载 类库
     */
    static public function load($class)
    {
        // new \core\route();
        // $class = '\core\route';

        if(isset(self::$classMap[$class]))
        {
            return true;
        } else {
            $class = str_replace('\\','/',$class);
            $file = HLROOT . "/". $class . ".php";
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }


    }

    public function assign($name,$data)
    {
        $this->assign[$name] = $data;
    }

    public function display($file){
        $f= APP . "/views/".$file;
        if (is_file($f)){
            //将键值转化为变量

            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP."/views");
            $twig = new \Twig_Environment($loader,array(
                'cache' => HLROOT."/log",
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate($file);
            $template->display($this->assign?$this->assign:array());
        }
    }
}
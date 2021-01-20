<?php


namespace core\libs;

/**
 * 配置文件基类
 * Class config
 * @package core\libs
 */
class config
{
    static public $conf = array();
    static public function get($name,$file){
        /**
         * 1. 判断配置文件是否存在
         * 2. 判断配置是否存在
         * 3. 缓存配置
         */
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        } else {

            $path = HLROOT . "/core/config/" .$file. ".php";

            if (is_file($path)){
                $config = include $path;
                if (isset($config[$name])){
                    self::$conf[$file] = $config;
                    return $config[$name];
                } else {
                    throw new \Exception("找不到配置项".$name);
                }
            } else {
                throw new \Exception("找不到配置文件".$file);
            }
        }
    }

    static public function all($file){
        /**
         * 1. 判断配置文件是否存在
         * 2. 判断配置是否存在
         * 3. 缓存配置
         */
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $path = HLROOT . "/core/config/" .$file. ".php";
            if (is_file($path)){
                $config = include $path;
                self::$conf[$file] = $config;
                return $config;
            } else {
                throw new \Exception("找不到配置文件".$file);
            }
        }
    }
}
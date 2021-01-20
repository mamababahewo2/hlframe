<?php

function p($val){
    if (is_bool($val)){
        var_dump($val) . "<hr/>";
    } else if(is_null($val)) {
        var_dump(NULL);
    } else {
        echo "<pre style='position: relative;z-index:1000;padding: 10px;border-radius: 5px;background: #fff;border: 1px solid #eee;font-size: 14px;line-height: 50px;opacity: 0.9;'> ".print_r($val,true)."</pre><br/>";
    }
}

/**
 * @param $name 对应值
 * @param $default 默认值
 * @param $fitt 过滤方法 'int'
 */
function post($name,$default = false,$fitt = false){
    if(isset($_POST[$name])){
        if($fitt){
            switch ($fitt) {
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    } else {
                        return $default;
                    }
                    break;

                case "default":

                    break;
            }
        } else {
            return $_POST[$name];
        }
    } else {
        return $default;
    }
}

/**
 * @param $name 对应值
 * @param $default 默认值
 * @param $fitt 过滤方法 'int'
 */
function get($name,$default = false,$fitt = false){
    if(isset($_GET[$name])){
        if($fitt){
            switch ($fitt) {
                case 'int':
                    if(is_numeric($_GET[$name])){
                        return $_GET[$name];
                    } else {
                        return $default;
                    }
                    break;

                case "default":

                    break;
            }
        } else {
            return $_GET[$name];
        }
    } else {
        return $default;
    }
}


/**
 * 跳转
 * @param $url
 */
function jump($url){
    header("Localhost:".$url);
    exit();
}
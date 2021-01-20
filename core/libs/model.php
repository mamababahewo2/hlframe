<?php


namespace core\libs;
use \core\libs\config;
use Medoo\Medoo;

/**
 * 模型基类
 * Class model
 * @package core\libs
 */
class model extends Medoo
{
    public function __construct()
    {

        $databases = config::all("databases");
        parent::__construct($databases);
    }
}
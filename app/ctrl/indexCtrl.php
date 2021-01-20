<?php
namespace app\ctrl;
use app\model\tablessModel;
use core\libs\config;

class indexCtrl extends \core\hlframe {
    public function index(){
        $data = "hello word";
        $title = "试图文件";
        $this->assign("title",$title);
        $this->assign("data",$data);
        $this->display("index.html");
    }

    public function test(){

    }
}
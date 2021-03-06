<?php
namespace app\model;

use core\libs\model;

class tablessModel extends model
{
   public $table = "tabless";

    /**
     * 查询所有
     * @return string
     */
    public function lists()
    {
        return $this->select($this->table,"*");
    }

    /**
     * 查询一条数据
     * @param $id
     * @return bool|mixed
     */
    public function getOne($id){
        $res = $this->get($this->table,"*",array(
            'id'=>$id
        ));
        return $res;
    }

    /**
     * 修改一条数据
     * @param $data
     * @param null $where
     * @return bool|\PDOStatement
     */
    public function setupdate($data, $where = null)
    {
        return parent::update($this->table, $data, $where); // TODO: Change the autogenerated stub
    }

    /**
     * 添加一条数据
     * @param $data
     * @return bool|\PDOStatement
     */
    public function add($data){
        return $this->insert($this->table,$data);
    }

    /**
     * 删除一条数据
     * @param $id
     * @return bool|\PDOStatement
     */
    public function del($id){
        return $this->delete($this->table,array(
            'id'=>$id
        ));
    }
}
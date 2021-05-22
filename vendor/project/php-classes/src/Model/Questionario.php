<?php

namespace Inova\Model;

use \Inova\DB\Sql;
use \Inova\Model;

class Questionario extends Model {

    public static function listQuest()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_questionario");
    }

    public function save()
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_questionario_save (:iduser, :desnome, :dessobrenome, :desgrau, :desidade, :quest1, :quest2, :quest3)", array(
           
            ":iduser"=>$this->getiduser(),
            ":desnome"=>$this->getdesnome(),
            ":dessobrenome"=>$this->getdessobrenome(),
            ":desgrau"=>$this->getdesgrau(),
            ":desidade"=>$this->getdesidade(),
            ":quest1"=>$this->getquest1(),
            ":quest2"=>$this->getquest2(),
            ":quest3"=>$this->getquest3()
        ));

        $this->setData($results[0]);
    }
}










?>
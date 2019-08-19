<?php

namespace PuntelFig\OOP_av\Db;

class ORM{
    private $db;

    public function setDb(Db $db){
        $this->db = $db;
    }

    public function select(bool $data){
        if($data){
            return [];
        }
        throw new \Exception("Erro ao processar a requesição carai", 6666);
        
    }
}
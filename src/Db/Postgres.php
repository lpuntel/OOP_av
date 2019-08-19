<?php

namespace PuntelFig\OOP_av\Db;

//use PuntelFig\Db\Db; Não é necessário por estar no mesmo namespace

class Postgres implements Db {
    public function ConectaDb() : string{
        return 'Conectado ao Postgres';
    }

}
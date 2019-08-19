<?php

namespace PuntelFig\OOP_av;

trait GetterSetter{
    public function __set($propriedade, $valor){
        $metodo = 'set' . ucfirst($propriedade);
        if(method_exists($this , $metodo)){
            return $this->$metodo($valor);
        }else {
            $this->$propriedade = $valor;
        }
    }
    
    public function __get($propriedade){
        $metodo = 'get' . ucfirst($propriedade);
        if(method_exists($this , $metodo)){
            return $this->$metodo();
        }else {
            $this->$propriedade;
        }
    }
}

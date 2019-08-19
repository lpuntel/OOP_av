<?php

namespace PuntelFig\OOP_av\People;


class Pessoa{

    use \PuntelFig\OOP_av\GetterSetter;

    private $nome;
    private $idade;
    private $peso;
    
    public function __construct()
    {
        echo 'Classe Pessoas instanciada' . PHP_EOL;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function __toString() :string{
        return $this->nome . ', ' . $this->idade . ', ' . $this->peso . ' .';
    }

}
/*  Alternativa para tratar todos os atributos em uma unica variável    
    //private $data = [];

    public function setNome(string $nome){
        $this->DATA[] = $nome;
    }

    public function setIdade(int $idade){
        $this->data[] = $idade;
    }

    public function setPeso(float $peso){
        $this->data[] = $peso;
    }
*/
  

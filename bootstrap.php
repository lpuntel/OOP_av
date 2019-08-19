<?php

require __DIR__ . '/Autoload.php';


$pessoa1 = new PuntelFig\OOP_av\People\Pessoa;
/*
$pessoa1->setNome('Puntel');
$pessoa1->setIdade(61);
$pessoa1->setPeso(95.5);
*/
$pessoa2 = new PuntelFig\OOP_av\People\Pessoa;
/*
$pessoa2->setNome('Mane');
$pessoa2->setIdade(18);
$pessoa2->setPeso(65.3);
*/
//Usando a automatização do __set e __get
$pessoa1->Nome = 'Puntel';
$pessoa1->Idade = 61;
$pessoa1->Peso = 95.5;

$pessoa2->Nome = 'Mane';
$pessoa2->Idade = 18;
$pessoa2->Peso = 65.3;

echo '<PRE>';
print_r($pessoa1);
print_r($pessoa2);

echo $pessoa1 . PHP_EOL;
echo $pessoa2 . PHP_EOL;


echo '</PRE>';



/*
$conexao = new PuntelFig\OOP_av\Db\ORM;


print_r($pessoa);
var_dump((new PuntelFig\OOP_av\Db\MySql)->ConectaDb());
print_r((new PuntelFig\OOP_av\Db\Postgres)->ConectaDb());

//print_r((new PuntelFig\OOP_av\Db\ORM)->select(false));

//Tratando erro
try {
    (new PuntelFig\OOP_av\Db\ORM)->select(false);
    
} catch (Exception $e) {
    echo '<br>' . $e->getMessage();
    echo '<br>' . $e->getCode();
}
*/

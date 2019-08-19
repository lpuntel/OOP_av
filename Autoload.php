<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new PuntelFig\OOP_av\Autoload;
$autoload->register();
$autoload->addNamespace('PuntelFig\OOP_av', 'src');

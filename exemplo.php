<?php



require_once "vendor/autoload.php";
use vinicius\cep\Search;


$obj = new Search;

$resultado = $obj->getAdress('46430000');

print_r($resultado);


?>
<?php
require "conexao.php";
require "RepositorioAviao.php";

$repositorio = new RepositorioAviao();

$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Modelo: ".$valor['modelo'].PHP_EOL;
}
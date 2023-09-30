<?php
require "conexao.php";
require "RepositorioPessoa.php";

$repositorio = new RepositorioAviao();

$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Nome: ".$valor['nome'].PHP_EOL;
}
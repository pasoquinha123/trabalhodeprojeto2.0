<?php
require "conexao.php";
require "aviao.php";
require "RepositorioAviao.php";
$repAviao = new RepositorioAviao();

$aviao = new aviao("combi","ícaro","70","900km/h","4200km");

$repAviao->cadastrar($banco,$aviao);

?>s

    
<?php

try{
    $banco = new PDO("sqlite:dado.sqlite");
}catch(PDOException $e){
    echo "Erro no momento de acionar o banco!";
}

$criarTabela = "CREATE TABLE IF NOT EXISTS AVIAO(
    modelo TEXT,
    cmpaerea TEXT,
    cdp TEXT,
    velomax TEXT,
    autonomia TEXT,
    primary key (modelo))";


$banco->query($criarTabela);

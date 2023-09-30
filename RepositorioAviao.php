<?php

class RepositorioAviao{
    
    public function cadastrar(aviao $aviao, PDO $pdo){
       
        $codigoSql = "INSERT INTO AVIAO(modelo,cmpaerea,cdp,velomax,autonomia) VALUES (:md,:cm,:cdp,:ve:,:au)";
        $modelo = $aviao->exibirModelo();
        $cmpaerea = $aviao->exibirCmpaerea();
        $cdp = $aviao->exibirCdp();
        $velomax = $aviao->exibirVelomax();
        $autonomia = $aviao->exibirAutonomia();

        
        $inserir = $pdo->prepare($codigoSql);
        
        $inserir->bindParam(":md",$modelo);
        $inserir->bindParam(":cm",$cmpaerea);
        $inserir->bindParam(":cdp",$cdp);
        $inserir->bindParam(":ve",$velomax);
        $inserir->bindParam(":au",$autonomia);
       
        $inserir->execute();
    }
    
    public function listar(PDO $banco) {
        $sql = "SELECT * FROM AVIAO";

       
        $select = $banco->query($sql);

        
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}
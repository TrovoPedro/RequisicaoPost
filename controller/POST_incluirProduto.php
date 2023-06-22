<?php
    require '../model/Usuario.php';
    require './ler.php';
  
    $dados = json_decode(file_get_contents('php://input'));
    
    //echo $dados->nome;

   $usuarios = new Produto($dados->nome, $dados->preco);
   //var_dump($produto); 
    
    $json = json_encode($usuarios);
      
    $movimentoDeLeitura = realizarLeitura();
    array_push($movimentoDeLeitura, $usuarios);
    $json2 = json_encode($movimentoDeLeitura);
  
   
    
    $json3 = json_decode($json2);
   $json4 = json_encode($json3);
   echo $json4;
   
   








?>
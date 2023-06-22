<?php
function realizarLeitura(){
  $arquivo = "./senhas.txt";

  $conteudo = fopen($arquivo, "r");

  $json = fread($conteudo,filesize($arquivo));
  
  fclose($conteudo);
  
  $resposta = json_decode($json);
    

  
  return $resposta;
}
?>
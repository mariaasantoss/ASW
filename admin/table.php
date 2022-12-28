<?php

// Estabelece uma ligação com a base de dados usando o programa abreconexao.php
// A variável $conn é inicializada com a ligação estabelecida

include "abreconexao.php";

$db= $conn;
$tabela="Voluntarios";
$colunas= ['email', 'nome','genero','CC','pass', 'nrTele','concelho','freguesia', 'distrito', 'nrCartaCon', 'foto', 'dataNasc'];
$fetchData = fetch_data($db, $tabela, $colunas);

function fetch_data($db, $tabela, $colunas){
 if(empty($db)){
  $msg= "Erro de conexão";
 }elseif (empty($colunas) || !is_array($colunas)) {
  $msg="Defina o nome das colunas!";
 }elseif($tabela == ''){
   $msg= "Defina nome da tabela!";
}else{

   $nomeColuna = implode(", ", $colunas);
   $query = "SELECT ".$nomeColuna." FROM $tabela";
   $result = $db->query($query);


if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "Informação não encontrada"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>

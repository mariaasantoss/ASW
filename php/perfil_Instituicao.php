<?php

include "abreconexao.php";

$query = " INSERT INTO Perfil VALUES  ('" . htmlspecialchars($_POST["tipoInstituicao"]) . "' , 
'" . htmlspecialchars($_POST["tipoDoacoes"]) . "' , '" . htmlspecialchars($_POST["hora_recolha"]) . "' ,
'" . htmlspecialchars($_POST["quantidadeExpectavel"]) . "' )" ;

echo $query;

$res = mysqli_query($conn, $query); 
  if ($res) {
  echo "Atualizado com sucesso";
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/php/mainI.php');
  
} else {
  echo "Erro: atualização falhou" . $query . "<br>" . mysqli_error($conn);
  
}

// Termina a ligação com a base de dados
mysqli_close($conn);
?>

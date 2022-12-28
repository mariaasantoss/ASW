<?php

include "abreconexao.php";

$query = " INSERT INTO Preferencias VALUES  ('" . htmlspecialchars($_POST["distrito"]) . "' , 
'" . htmlspecialchars($_POST["concelho"]) . "' , '" . htmlspecialchars($_POST["diaSemana"]) . "' ,
 '" . htmlspecialchars($_POST["Período"]) . "' )" ;

echo $query;

$res = mysqli_query($conn, $query); 
  if ($res) {
  echo "Atualizado com sucesso";
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/update/preferencias.html');
 
} else {
  echo "Erro: atualização falhou" . $query . "<br>" . mysqli_error($conn);
  
  
}


// Termina a ligação com a base de dados
mysqli_close($conn);
?>

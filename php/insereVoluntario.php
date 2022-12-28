<?php

// Estabelece uma ligação com a base de dados usando o programa abreconexao.php
// A variável $conn é inicializada com a ligação estabelecida

include "abreconexao.php";
//$query = "insert into Voluntarios values ('francisco@gmail.com', 'Francisco','ola', 12,'ola', 12, 'ola', 'ola', 'ola', 11, 'ola', 'ola', '2002-11-11')";

$pwd = $_POST["pass"];
$encrypted_pwd = md5($pwd);

$query = "insert into Voluntarios values ('" . htmlspecialchars($_POST["email"]) . "', '" . htmlspecialchars($_POST["name"]) . "' , '" . htmlspecialchars($_POST["genero"]) . "' ,
         " . htmlspecialchars($_POST["ccidadao"]) . " , '" . htmlspecialchars("$encrypted_pwd") . "' , " . htmlspecialchars($_POST["telefone"]) . " ,
         '" . htmlspecialchars($_POST["concelho"]) . "' , '" . htmlspecialchars($_POST["freguesia"]) . "' ,
         '" . htmlspecialchars($_POST["distrito"]) . "' , " . htmlspecialchars($_POST["cconducao"]) . " , '" . htmlspecialchars($_POST["imagem"]) . "',
         '" . htmlspecialchars($_POST["data"]) . "' )" ;
echo $query;

$res = mysqli_query($conn, $query); 
  if ($res) {
  echo "Registo concluído com sucesso";
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/Login_v1/index.html');
} else {
  echo "Erro: novo registo falhou" . $query . "<br>" . mysqli_error($conn);
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/Register/register.html');
}

// Termina a ligação com a base de dados
mysqli_close($conn);
?>



<?php

// Estabelece uma ligação com a base de dados usando o programa abreconexao.php
// A variável $conn é inicializada com a ligação estabelecida

include "abreconexao.php";

//$query = "insert into Instituicoes values ('francisco@gmail.com', 'ola', 'ola', 'ola', 12, 'ola', 'ola', 'ola', 'ola', 'ola', 12)";

$pwd = $_POST["pass"];
$encrypted_pwd = md5($pwd);

$query = "insert into Instituicoes values ('" . htmlspecialchars($_POST["email"]) . "', '" . htmlspecialchars($_POST["nome"]) . "' , '" . htmlspecialchars($_POST["morada"]) . "',
         '" . htmlspecialchars("$encrypted_pwd") . "' , " . htmlspecialchars($_POST["nrTeleInstituicao"]) . " ,'" . htmlspecialchars($_POST["concelho"]) . "' ,
         '" . htmlspecialchars($_POST["freguesia"]) . "' , '" . htmlspecialchars($_POST["distrito"]) . "' , '" . htmlspecialchars($_POST["descricao"]) . "' ,
         '" . htmlspecialchars($_POST["pessoaContacto"]) . "' , " . htmlspecialchars($_POST["nrTelePessoa"]) . " )";


echo $query;
$res = mysqli_query($conn, $query); if($res) {
  echo "Registo concluído com sucesso";
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/Login_v1/index.html');
} else {
  echo "Erro: novo registo falhou" . $query . "<br>" . mysqli_error($conn);
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/Register/register.html');
}

// Termina a ligação com a base de dados
mysqli_close($conn);
?>
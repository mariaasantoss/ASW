<?php

// Estabelece uma ligação com a base de dados usando o programa abreconexao.php
// A variável $conn é inicializada com a ligação estabelecida

include "abreconexao.php";

//$query = "insert into Instituicoes values ('francisco@gmail.com', 'ola', 'ola', 'ola', 12, 'ola', 'ola', 'ola', 'ola', 'ola', 12)";
$query = " UPDATE Voluntarios SET   email = '" . htmlspecialchars($_POST["email"]) . "', 
                                    nome = '" . htmlspecialchars($_POST["name"]) . "', 
                                    genero = '" . htmlspecialchars($_POST["genero"]) . "',
                                    CC = " . htmlspecialchars($_POST["ccidadao"]) . ",
                                    pass = '" . htmlspecialchars($_POST["pass"]) . "' , 
                                    nrTele = " . htmlspecialchars($_POST["telefone"]) . " ,
                                    concelho = '" . htmlspecialchars($_POST["concelho"]) . "' ,
                                    freguesia = '" . htmlspecialchars($_POST["freguesia"]) . "' ,
                                    distrito = '" . htmlspecialchars($_POST["distrito"]) . "' ,
                                    nrCartaCon = " . htmlspecialchars($_POST["cconducao"]) . " ,
                                    foto = '" . htmlspecialchars($_POST["upload"]["name"]) . "',
                                    dataNasc = " . htmlspecialchars($_POST["data"]) . "  WHERE email = '" . htmlspecialchars($_POST["email"]) . "' ";
                            

echo $query;
$res = mysqli_query($conn, $query); if($res) {
  echo "Atualizado com sucesso";
  header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/php/main.php');

} else {
  echo "Erro: update falhou" . $query . "<br>" . mysqli_error($conn);
}


echo $_POST["email"];
echo $_POST["name"];
echo $_POST["genero"];


// Termina a ligação com a base de dados
mysqli_close($conn);
?>
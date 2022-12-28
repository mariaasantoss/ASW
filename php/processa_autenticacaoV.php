<?php 
session_start();

include "abreconexao.php";

$email = htmlspecialchars($_POST["email"]);
$pass = htmlspecialchars($_POST["pass"]);

if (!$email) {
    die("Email de utilizador obrigatorio");
}

if (!$pass) {
    die("Password de utilizador obrigatoria");
}

$query = mysqli_query($conn, "SELECT * FROM Voluntarios WHERE email = '$email'");
$query2 = mysqli_query($conn, "SELECT pass FROM Voluntarios WHERE email='$email'");
$row = mysqli_fetch_assoc($query2);

if (mysqli_num_rows($query)) {
    $query = "SELECT `nome` FROM `Voluntarios` WHERE `email`='$email'";
    $utilizador = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($utilizador);
    $_SESSION["utilizador"] = $row["name"];
    header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/php/main.php');
    exit();

} else {
    header('Location: http://appserver-01.alunos.di.fc.ul.pt/~asw10/ASW/Register/register.html');
    echo("Registe-se primeiro!");
    exit();
}

// Termina a ligação com a base de dados
mysqli_close($conn);

?>

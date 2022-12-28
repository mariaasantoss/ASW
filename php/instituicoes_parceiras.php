<?php

include "abreconexao.php";

$query = " SELECT concelho, 
FROM Instituicoes; ";
echo $query;

$query1 = " SELECT concelho,
FROM Preferencias; ";
echo $query1;


$query2 = " SELECT nome FROM Instituicoes ";

if (strcmp($query, $query1) !== 0){
    echo $query2;
}

mysqli_close($conn)
?>
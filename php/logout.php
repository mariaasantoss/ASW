<?php
session_start();
unset($_SESSION["utilizador"]);
header('Location: ../Login_v1/index.html');
?>
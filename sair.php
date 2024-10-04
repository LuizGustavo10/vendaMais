<?php

session_start();
//destruir a sessão
session_destroy();
//limpar variáveis de sessão;
unset($_SESSION['cpf']);
unset($_SESSION['senha']);

//manda para o login
header('location:index.php');

?>


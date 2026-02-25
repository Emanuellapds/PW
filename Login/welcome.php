<?php 
session_start();
if (isset($_SESSION['user']))  {
     echo "Ben-vindo, " . $_SESSION['user'] . "!";
}else{
    echo "Usuário não encontrado.";
}
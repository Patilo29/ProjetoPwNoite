<?php

$servidor ="localhost";
$User = "root";
$Pass ="";
$database = "pwtarde";

$conexao = mysqli_connect($servidor,$User,$Pass);
mysqli_select_db($conexao,$database);
?>
<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA','');
define('DB','etec3');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(mysqli_error($conexao). 'Banco de dados OFF');

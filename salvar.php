<?php
    session_start();
    include ("conecta.php");

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNasc = $_POST["dataNasc"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];

    if ($senha != $senha2){
        $_SESSION["danger"] = "Erro ao conferir dados do usuário";
        header ("Location: cadastro.php");
    }

    $sqlins = "INSERT INTO usuario (`email`, `senha`, `nome`, `dtnasc`, `cpf`) 
    VALUES ('$email', MD5('$senha'), '$nome', '$dataNasc', '$cpf')";

    $resultado = mysqli_query ($conexao, $sqlins);

    
    if (!$resultado ){
        $_SESSION["danger"] = "Erro ao conferir dados do usuário. Erro: ".mysqli_error($conexao);
        header ("Location: cadastro.php");
    }
    else{
        $_SESSION["success"] = "Usuario Criado com sucesso!";
        header ("Location: index.php");
    }

 

?>
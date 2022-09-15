<?php session_start() ;
include("alerta.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bulma.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>

<section class="is-fullheight">
    <div class="container has-text-centered">

        <h2 class="title"> Sistema de Login Etec</h2>

        <?php 
            mostraAlerta("danger");
            mostraAlerta("success");
        ?>

    <form accept-charset="UTF-8" action="salvar.php" autocomplete="off" method="POST" >
        <p>   

        Nome: <input class="input is-success" id="nome" name="nome" type="text"    required /> 
        CPF: <input class="input is-success" id="cpf" name="cpf" type="text"    required /> 
        Data de Nascimento: <input class="input is-success" id="dtnasc" name="dtnasc" type="date"    required /> 

        E-mail: <input class="input is-success" id="email" name="email" type="email"    required /> 
        <br/> 
        Senha:  <input class="input is-success" id="senha1" name="senha1" type="password" required 
        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,}$"
        title="Senha deve ter ao menos 1 maiúscula, 1 minúscula e 1 caracter especial"/> 

        Confirmar Senha:  <input class="input is-success" id="senha2" name="senha2" type="password" required 
        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,}$"
        title="Senha deve ter ao menos 1 maiúscula, 1 minúscula e 1 caracter especial"/> 

        <br /><br /> 
        <button class="button" type="submit" id="btnEntrar">Salvar</button></p>
    </form>

    </div>

</section>


</body>
</html>
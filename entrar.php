<?php include("cab.php"); ?>

<section class="is-fullheight">
    <div class="container has-text-centered">

        <h2 class="title"> Login Etec</h2>

        <?php 
            mostraAlerta("danger");
            mostraAlerta("success");
        ?>

        <form accept-charset="UTF-8" action="login.php" autocomplete="off" method="POST" >
        <p>   E-mail: <input class="input is-success" id="email" name="email" type="email"    required /> 
        <br/> Senha:  <input class="input is-success" id="senha" name="senha" type="password" required 
        /> 

        <br /><br /> 
            <button class="btn btn-lg btn-primary " type="submit" disabled id="btnEntrar">Entrar</button></p>
        </form>

        <form action="cadastro.php" >
            <button class="btn btn-lg btn-primary " type="submit" id="btnNovo">Novo usuário</button></p>
        </form>
    </div>

</section>

</body>
<script src="app.js"></script>
</html>

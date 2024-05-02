<?php

include_once "head.php";

?>

<br><CENTER>
<div class="form-ui"><CENTER>
    <h1>CADASTRO</h1><br><br>
<form action="functions/function_cadastrar.php" method="post">

    
<div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nome"><br><br>
        </div>


        <label for="inputText" class="col-sm-2 col-form-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Telefone"><br><br>
        </div>

        <label for="inputText" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="E-mail"><br><br>
        </div>
        <button class="btn_01 btn-primary" type="submit">Cadastrar</button><br>
        <button class="btn_01  btn-secondary" type="reset">Limpar</button>

</form>
</CENTER>
</div>
</CENTER>
</body>

</html>
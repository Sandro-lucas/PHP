<?php
include_once "head.php";
include_once "bd/conexao.php";

$id = $_GET['id'];


$sql = "SELECT * FROM clientes WHERE id_cliente = $id ";
$consulta = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($consulta);

$idcliente = $row['id_cliente'];
$nome = $row['nome'];
$telefone = $row['telefone'];
$email = $row['email'];


?>
<br><CENTER>
<div class="form-ui"><CENTER>
    <h1>Atualizar Dados</h1><br><br>
<form action="functions/functions_atualizar.php" method="post">


    <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome Copleto" value="<?php echo $nome; ?>"><br><br>
        </div>


        <label for="inputText" class="col-sm-2 col-form-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Telefone" name="Telefone" placeholder="Telefone" value="<?php echo $telefone; ?>"><br><br>
        </div>

        <label for="inputText" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="E-mail" name="E-mail" placeholder="E-mail" value="<?php echo $email; ?>"><br><br>
            <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $idcliente; ?>"><br><br>
        </div>
        <button class="btn_01 btn-primary" type="submit">Cadastrar</button><br>
        <button class="btn_01  btn-secondary" type="reset">Limpar</button>

</form>
</CENTER>
</div>
</CENTER>
</body>

</html>
<?php 
include_once "../bd/conexao.php";
include_once "../head.php";

$id = $_POST['id_cliente'];
$nome = $_POST['Nome'];
$telefone = $_POST['Telefone'];
$email = $_POST['E-mail'];

//echo "$id, $nome, $telefone, $email";

$sql = "UPDATE clientes SET  nome = '$nome', telefone = '$telefone', email = '$email' WHERE id_cliente = '$id' ";

$consulta = mysqli_query($conn,$sql);
if ($consulta == TRUE) {
    echo"Atualizado com Sucesso!!!";
}else{
    echo"Erro ao Atualizado". mysqli_error($conn);
}
?>

    
</body>
</html>
<?php 

mysqli_close($conn)
?>
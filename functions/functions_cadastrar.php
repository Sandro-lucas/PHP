<?php 

    include_once "../bd/conexao.php";
 

    $nome = $_POST['Nome'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['E-mail'];
   
   
 $sql ="INSERT INTO clientes (nome,telefone,email) values ('$nome','$telefone', '$email')";

$resutado = mysqli_query($conn, $sql);

if($resutado) {
echo " <script>alert('Registro salvo com sucesso')</script>";
}else{
    " <script>alert('Erro ao salvar com registro')</script>";
}



?>
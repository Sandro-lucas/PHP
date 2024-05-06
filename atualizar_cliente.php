<?php 
include_once "head.php";
include_once "bd/conexao.php"


?>
<title>Atualizar Clientes</title>
    <?php 
    $sql = "SELECT * FROM clientes ORDER BY id_cliente";
    $consulta = mysqli_query($conn,$sql);
    ?>
    <table>
<tr>
    <td><strong>Codigo</strong></td>
    <td><strong>Nome</strong></td>
    <td><strong>Telefone</strong></td>
    <td><strong>Email</strong></td>
</tr>
<?php 

while ($row = mysqli_fetch_assoc($consulta)) {

    echo "<tr>";
    echo "<td>". $row['id_cliente']."</td>";
    echo "<td>". $row['nome']."</td>";
    echo "<td>". $row['telefone']."</td>";
    echo "<td>". $row['email']."</td>";
    echo "<td><a href=\"editcliente.php?id=$row[id_cliente]\">Editar</a></td>";
    echo "</tr>";
    
}

?>

    </table>
</body>
</html>
<?php 

mysqli_close($conn)
?>
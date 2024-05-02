
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class=" col-lg-12">
                <h1 class="text-center">Acompanhamento de Atendimento</h1>
                <table class='table'>
                    
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Número</th>
                        <th>Endereço</th>
                        <th>Status</th>
                    </tr>
                    
                    <?php
                    $sql = "select atendimentos.id_atendimento, clientes.nome, equipamentos.numero_serie, equipamentos.endereco_ip, atendimentos.status from atendimentos join clientes on clientes.id_cliente = atendimentos.id_cliente join equipamentos on equipamentos.id_equipamento = atendimentos.id_equipamento order by atendimentos.id_atendimento desc limit 15";
                     $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)> 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['status'] == 1) echo "<tr class='table-success'>";
                            echo "<td>".$row['id_atendimento']."</td>";
                            echo "<td>".$row['nome']."</td>";
                            echo "<td>".$row['numero_serie']."</td>";
                            echo "<td>".$row['endereco_ip']."</td>";
                       if($row['status'] == 0) {
                        echo "<td> Em aberto </td>";
                       }else{
                        echo"<td> Finalizada </td>";
                       }
                    echo "</td>";
                    echo "</tr>";
                    }
                       
                    }
              
                       
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<?php 

mysqli_close($conn);

?>
<?php

require 'conexao.php';

if(isset($_POST['busca'])){
	$busca = $_POST['busca'];
} else {
	$busca = '';
}

$sql = "SELECT * FROM produtos WHERE nome LIKE '%$busca%' ORDER BY id_produto DESC LIMIT 15";
$res = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="titulo">
        <h3>
            <i class="fas fa-list-ul"></i>
            Lista de itens
        </h3>
    </div>    

    <form action="lista.php" method="post">
		<div class="" style="margin-top: 20px;">
			<input type="search" name="busca" id="busca" size="60" placeholder="Pesquise o nome do produto">
			<button type="submit" name="botao" class="btn btn-success">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</form>

    
    <div id="botao">
        <a href="index.php" class="btn btn-primary">Cadastrar</a>
    </div>

    <div class="tabela">
        <table class="table table-bordered" width="80%" cellspacing="12">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Data de Validade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($reg = mysqli_fetch_array($res, MYSQLI_ASSOC)){

                        if($reg['data_validade'] == NULL){
                            $data_validade = "-"; 
                        } else {
                            $data_validade = date('d/m/Y', strtotime($reg['data_validade']));
                        }
                ?>
                <tr>
                    <th><?php echo $reg['id_produto']; ?></th>
                    <td><?php echo $reg['nome']; ?></td>
                    <td><?php echo $reg['marca']; ?></td>
                    <td><?php echo $reg['qtd']; ?></td>
                    <td><?php echo $reg['valor_unitario']; ?></td>
                    <td><?php echo $data_validade; ?></td>
                    <td>
                        <a href="formulario_alteracao.php?id_produto=<?php echo $reg['id_produto']; ?>" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <a href="apagar_prod.php?id_produto=<?php echo $reg['id_produto']; ?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Apagar
                        </a>
                    </td>
                </tr>
            </tbody>
                <?php
                    }
                ?>
        </table>
    </div>

</body>
</html>
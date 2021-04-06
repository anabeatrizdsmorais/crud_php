<?php
    require 'conexao.php';

$id_produto = $_GET['id_produto'];

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$quantidade = $_POST['quantidade'];
$valor_unitario = $_POST['valorUnitario'];
$data_validade = $_POST['dataValidade'];

$update = "UPDATE produtos 
        SET nome = '$nome',
        marca = '$marca',
        qtd = $quantidade,
        valor_unitario = $valor_unitario,
        data_validade = '$data_validade'
        WHERE id_produto = $id_produto ";

$res = mysqli_query($con, $update);

if($res){
    echo "
        <script>
            console.log('Registro alterado');
            location.href = 'lista.php';
            alert('Alteração feita com sucesso!!');
        </script>
        ";
} else {
    echo "
        <script>
            console.log('Nada foi alterado');
            location.href = 'formulario_alteracao.php';
            alert('Erro ao alterar!!');
        </script>
        ";
}

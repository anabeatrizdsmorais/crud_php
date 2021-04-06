<?php

require 'conexao.php';

$id_produto = $_GET['id_produto'];

$sql = "DELETE FROM produtos WHERE id_produto = $id_produto";
$res = mysqli_query($con, $sql);

if($res){
    echo "
    <script>
        console.log('Registro apagado.');
        alert('Registro apagado com sucesso!!');
        location.href = 'lista.php';
    </script>
    ";
} else {
    echo "
        <script>
            console.log('Registro NÃO FOI apagado.');
            alert('Erro ao apagar.');
            location.href = 'lista.php';
        </script>
    ";
}
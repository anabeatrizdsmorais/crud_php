<?php 

require 'conexao.php';

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$qtd = $_POST['quantidade'];
$vlr_unit = $_POST['valorUnitario'];
$data_validade = $_POST['dataValidade'];

$insert = "INSERT INTO produtos 
            (nome, marca, qtd, valor_unitario, data_validade) 
            values ('$nome', '$marca', '$qtd', '$vlr_unit', '$data_validade')";

$resultado = mysqli_query($con, $insert);

if($resultado) {
    echo "<script>
            location.href='lista.php';
			alert('Cadastro feito com Sucesso!');
		</script>";
        exit;
    
} else {
    echo "<script>
            location.href='index.php';
			alert('Erro ao gravar dados!');
		</script>";
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <link rel="stylesheet" href="../css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>
<body>

    <div class="titulo">
        <h3>
            <i class="fas fa-pencil-alt"></i>
            Cadastros de Produtos
        </h3>    
    </div>

    <div class="botao_lista">
        <a href="lista.php" class="btn btn-info">Lista de Itens</a>
    </div>

    <form action="cadastro_produto.php" method="POST" id="formulario">
        <div class="col-md-4">
            <label class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="col-md-4">
            <label class="form-label">Marca:</label>
            <input type="text" class="form-control" name="marca">
        </div>

        <div class="col-md-4">
            <label class="form-label">Quantidade:</label>
            <input type="text" class="form-control" name="quantidade">
        </div>
        
        <div class="col-md-4">
            <label class="form-label">Valor Unitário:</label>
            <input type="text" class="form-control" name="valorUnitario">
        </div>
        
        <div class="col-md-4">
            <label class="form-label">Data de Validade:</label>
            <input type="text" class="form-control" name="dataValidade">
        </div>
        
        <div class="col-md-3">
            <button type="submit" class="btn btn-success botao" >Cadastrar</button>
            <button type="reset" class="btn btn-danger botao">Limpar</button>
        </div>

    </form>

    <!--SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
</body>
</html>
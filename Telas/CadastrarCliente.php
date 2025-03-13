<?php   
    namespace PHP\Modelo\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Inserir.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;

    $conexao   = new Conexao();//acessar a classe conexao
    $inserir   = new Inserir();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1 style="text-align:center;"> Cadastro Cliente </h1>
    <form method="POST" class="form-control form-control-sm" style="width:50%;margin-left: 25%;">
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="999.999.999-99">
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="999.999.999-99">
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99)99999-9999">
        </div>
        <div class="mb-3">
            <label class="form-label">Preço Total</label>
            <input type="text" class="form-control" id="precoTotal" name="precoTotal" placeholder="9999,99">
        </div>
        <div class="mb-3">
            <label class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Informe o seu endereço">
        </div>
        <div class="mb-3">
            <label class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="999">
        </div>
        <div class="mb-3">
            <label class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe seu bairro">
        </div>
        <div class="mb-3">
            <label class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade">
        </div>
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Informe seu estado">
        </div>
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe seu CEP">
        </div>
        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" class="form-control" id="pais" name="pais" placeholder="Informe seu País">
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Cadastrar
            <?php
                try{
                    $cpf        = $_POST['cpf'];
                    $nome       = $_POST['nome'];
                    $telefone   = $_POST['telefone'];
                    $precoTotal = $_POST['precoTotal'];
                    $logradouro = $_POST['logradouro'];
                    $numero     = $_POST['numero'];
                    $bairro     = $_POST['bairro'];
                    $cidade     = $_POST['cidade'];
                    $estado     = $_POST['estado'];
                    $cep        = $_POST['cep'];
                    $pais       = $_POST['pais'];

                    $inserir->cadastrarEndereco($conexao, 
                                                $logradouro, 
                                                $numero, 
                                                $bairro,
                                                $cidade,
                                                $estado, 
                                                $cep,
                                                $pais);

                    $inserir->cadastrarCliente($conexao, 
                                               $cpf,
                                               $nome,
                                               $telefone,
                                               $consultar->consultarEndereco($conexao),
                                               $precoTotal);
                }
                catch(Except $erro)
                {
                    echo "Algo deu errado!<br><br>$erro";
                }


                



            ?>
        </button>
    </form>
    <button class="btn btn-primary"><a style="text-decoration:none;color:#fff;" href="../main.php">Voltar</a></button>
</body>
</html>
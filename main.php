<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');//Chamar a classe
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('Produto.php');
    require_once('Veiculo.php');
    require_once('Compra.php');
    require_once('DAO/Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Pessoa;//Defina qual a classe
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Produto;
    use PHP\Modelo\Veiculo;
    use PHP\Modelo\Compra;

    $conexao = new Conexao();
    $conexao->conectar();

    /*
    $produto = new Produto(1,'Teste',123,10);
    $compra1 = new Compra(1,
                          $produto,
                          10,
                          1.45,
                          14.50);
    
    echo $compra1->imprimir();

    $endereco1 = new Endereco(1,
                              'Avenida Senador Vergueiro',
                              400,
                              'Centro',
                              'São Bernardo do Campo',
                              'São Paulo',
                              02356000,
                              'Brasil');

    echo $endereco1->imprimir();

    $cliente1 = new Cliente('12345678910',
                          'Allan S',
                          '11985852626',
                           $endereco1,
                           1500);

    $cliente2 = new Cliente('12345678911',
                          'Claudia',
                          '1189898989',
                          $endereco1,
                           780);

    $funcionario1 = new Funcionario('12345667768',
                                    'Isaac',
                                    '1189898989',
                                    $endereco1,
                                    890);

    $funcionario2 = new Funcionario('12344325255',
                                    'Cleiton',
                                    '1124242424',
                                    $endereco1,
                                    1900);

    

    $veiculo1 = new Veiculo(1, 
                            'FMW33G8', 
                            $cliente1, 
                            "Branco", 
                            "Fiesta", 
                            2014, 
                            "Ford");

    echo "<br><br>".$veiculo1->imprimir();
    echo "<br><br>".$cliente1->imprimir();
    echo "<br><br>".$cliente2->imprimir();
    echo "<br><br>".$funcionario1->imprimir();
    echo "<br><br>".$funcionario2->imprimir();
    echo "<br><br>".$produto->imprimir();

    */





?>
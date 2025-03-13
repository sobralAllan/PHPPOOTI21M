<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarEndereco(Conexao $conexao)
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select max(codigo) from endereco";
                $result = mysqli_query($conn, $sql);
               
                while($dados = mysqli_fetch_Array($result))
                {                  
                    return $dados['max(codigo)'];//Encerrar o processo
                }
            }
            catch(Exception $erro)
            {
                echo "<br><br>Algo deu errado!";
            }
        }//fim do consultarEndereço

        function ConsultarCliente(Conexao $conexao, string $cpf)
        {
            try
            {
                $conn = $conexao->conectar();
                $sql = "select * from cliente inner join endereco on 
                        codigoEndereco = codigo and cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['cpf'] == $cpf){
                        echo "<br>CPF: ".$dados['cpf'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Preço Total: ".$dados['precoTotal'].
                             "<br>Logradouro: ".$dados['logradouro'].
                             "<br>Número: ".$dados['numero'].
                             "<br>Bairro: ".$dados['bairro'].
                             "<br>Cidade: ".$dados['cidade'].
                             "<br>Estado: ".$dados['estado'].
                             "<br>CEP: ".$dados['cep'].
                             "<br>Pais: ".$dados['pais'];
                        return;//Encerrar o processo
                    }//fim do if
                }//fim da while
            }//fim do try
            catch(Exception $erro)
            {
                echo "Algo deu errado!<br><br>".$erro;
            }
        }//fim do método

        function consultarEnderecoPorCPF(Conexao $conexao,
                                         string $cpf)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "select codigoEndereco from 
                           cliente where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result))
                {                  
                    return $dados['codigoEndereco'];//Encerrar o processo
                }//fim do while           
            }//fim do try
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do método

    }//fim da classe
?>
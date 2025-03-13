<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirCliente(Conexao $conexao,
                                string $cpf)
        {
            try
            {
                $conn = $conexao->conectar();
                $sql  = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Excluído com sucesso!";
                }else{
                    echo "Não excluído!";
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado!<br><br>$erro";
            }
        }//fim do método
    }//fim da classe
?>
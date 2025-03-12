<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function cadastrarEndereco(Conexao $conexao,
                                            string $logradouro,
                                            int $numero,
                                            string $bairro,
                                            string $cidade,
                                            string $estado,
                                            int $cep,
                                            string $pais)
        {
            try
            {   
                $conn = $conexao->conectar();//Abrir a conexao
                $sql  = "insert into endereco(codigo, logradouro, 
                         numero,bairro, cidade, estado, cep, pais) 
                         values('','$logradouro','$numero','$bairro',
                         '$cidade','$estado','$cep','$pais')";
                $result = mysqli_query($conn,$sql);//Executo o comando

                //Fechar a porta do banco de dados
                mysqli_close($conn);
                //Visualizar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Exception $erro)
            {
                return "<br><br>Algo deu errado!<br><br>$erro";
            }//fim do catch
        }//fim do método


        public function cadastrarCliente(Conexao $conexao, 
                                        string $cpf,
                                        string $nome, 
                                        string $telefone,
                                        int $codigoEndereco,
                                        float $precoTotal
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "insert into cliente(cpf,nome,telefone,
                        codigoEndereco,precoTotal) values('$cpf',
                        '$nome','$telefone','$codigoEndereco','$precoTotal')";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    return "<br><br>Cliente Inserido com Sucesso!";
                }
                return "<br><br>Cliente não inserido!";
            }
            catch(Exception $erro)
            {
                return "<br><br>Algo deu errado!<br><br>$erro";
            }//fim do catch
        }//fim do método



    }//fim da classe
?>
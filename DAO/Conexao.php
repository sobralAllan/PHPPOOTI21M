<?php
    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try
            {
                $conn = mysqli_connect('localhost',
                                       'root',
                                       '',
                                       'ti21m');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "Algo deu errado!";                       
            }
            catch(Exception $erro)
            {
                return "Algo deu errado!<br><br>.$erro";
            }
        }//fim do método conectar
    }//fim da classe
?>
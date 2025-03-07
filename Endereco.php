<?php
    namespace PHP\Modelo;

    class Endereco{
        private int    $codigo;
        private string $logradouro;
        private int    $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private int    $cep;
        private string $pais;

        public function __construct(int $codigo,
                                    string $logradouro,
                                    int $numero,
                                    string $bairro,
                                    string $cidade,
                                    string $estado,
                                    int $cep,
                                    string $pais)
        {
            $this->codigo     = $codigo;
            $this->logradouro = $logradouro;
            $this->numero     = $numero;
            $this->bairro     = $bairro;
            $this->cidade     = $cidade;
            $this->estado     = $estado;
            $this->cep        = $cep;
            $this->pais       = $pais;
        }//fim do construtor

        public function __get(string $dado):mixed
        {
            return $this->$dado;
        }//fim do get

        public function __set(string $variavel, string $dado):void
        {
            $this->variavel = $dado;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Código: ".$this->codigo.
                   "<br>Logradouro: ".$this->logradouro.
                   "<br>Número: ".$this->numero.
                   "<br>Bairro: ".$this->bairro.
                   "<br>Cidade: ".$this->cidade.
                   "<br>Estado: ".$this->estado.
                   "<br>CEP: ".$this->cep.
                   "<br>País: ".$this->pais;
        }//fim do imprimir
    }//fim da classe
?>
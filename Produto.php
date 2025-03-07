<?php
    namespace PHP\Modelo;

    class Produto{
        private int $codigo;
        private string $descricao;
        private int $tamanho;
        private float $peso;

        public function __construct(int $codigo,
                                    string $descricao,
                                    int $tamanho,
                                    float $peso
        ){
            $this->codigo      = $codigo;
            $this->descricao   = $descricao;
            $this->tamanho     = $tamanho;
            $this->peso        = $peso;
        }//fim do construtor

        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $dado)
        {
            $this->variavel = $dado;
        }//fim do set

        public function imprimir()
        {
            return "<br>Código: ".$this->codigo.
                   "<br>Descrição: ".$this->descricao.
                   "<br>Tamanho: ".$this->tamanho.
                   "<br>Peso: ".$this->peso;
        }//fim do imprimir




    }//fim da classe
?>
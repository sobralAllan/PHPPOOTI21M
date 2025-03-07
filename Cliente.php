<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf,
                                    string $nome, 
                                    string $telefone,
                                    Endereco $endereco,
                                    float $precoTotal)
        {
            parent::__construct($cpf,
                                $nome,
                                $telefone,
                                $endereco);
            $this->precoTotal = $precoTotal;
        }//fim do construtor

        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $dado):void
        {
            $this->variavel = $dado;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Preço Total: R$ ".$this->precoTotal;
        }//fim do método





    }//fim da classe cliente





?>
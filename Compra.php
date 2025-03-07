<?php
    namespace PHP\Modelo;
    require_once('Produto.php');
    use PHP\Modelo\Produto;

    class Compra{
        private int $codigo;
        private Produto $produto;
        private int $quantidade;
        private float $precoUnitario;
        private float $precoTotal;

        public function __construct(int $codigo,
                                    Produto $produto,
                                    int $quantidade,
                                    float $precoUnitario,
                                    float $precoTotal
        )
        {
            $this->codigo        = $codigo;
            $this->produto       = $produto;
            $this->quantidade    = $quantidade;
            $this->precoUnitario = $precoUnitario;
            $this->precoTotal    = $precoTotal;
        }//fim do construct

        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $dado):void
        {
            $this->variavel = $dado;
        }//fim do set

        public function imprimir(){
            return "<br>Código: ".$this->codigo.
                   "<br>Produto: ".$this->produto->imprimir().
                   "<br>Quantidade: ".$this->quantidade.
                   "<br>Preço Unitário: ".$this->precoUnitario.
                   "<br>Preço Total: ".$this->precoTotal;
        }//fim do imprimir

    }//fim da classe
?>
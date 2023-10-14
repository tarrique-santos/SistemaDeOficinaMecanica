<?php
class Peca {
    private $codigo;
    private $descricao;
    private $preco;

    public function __construct($codigo, $descricao, $preco) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    // Você pode adicionar métodos adicionais conforme necessário.

    public function __toString() {
        return "Código da Peça: " . $this->codigo . "<br>Descrição: " . $this->descricao . "<br>Preço: " . $this->preco;
    }
}
?>

<?php
class Servico {
    private $id;
    private $descricao;
    private $preco;

    public function __construct($id, $descricao, $preco) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getId() {
        return $this->id;
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
        return "ID do Serviço: " . $this->id . "<br>Descrição: " . $this->descricao . "<br>Preço: " . $this->preco;
    }
}


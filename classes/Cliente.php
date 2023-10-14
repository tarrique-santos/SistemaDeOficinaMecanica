<?php
class Cliente {
    private $codigo;
    private $nome;
    private $endereco;
    private $telefone;

    public function __construct($codigo, $nome, $endereco, $telefone) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Você pode adicionar métodos adicionais conforme necessário.

    public function __toString() {
        return "Código: " . $this->codigo . "<br>Nome: " . $this->nome . "<br>Telefone: " . $this->telefone;
    }
}
?>

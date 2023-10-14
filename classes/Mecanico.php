<?php
class Mecanico {
    private $codigo;
    private $nome;
    private $endereco;
    private $especialidade;

    public function __construct($codigo, $nome, $endereco, $especialidade) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->especialidade = $especialidade;
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

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    // Você pode adicionar métodos adicionais conforme necessário.

    public function __toString() {
        return "Código: " . $this->codigo . "<br>Nome: " . $this->nome . "<br>Especialidade: " . $this->especialidade;
    }
}
?>

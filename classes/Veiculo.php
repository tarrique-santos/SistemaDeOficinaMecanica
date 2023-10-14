<?php
class Veiculo {
    private $codigo;
    private $placa;
    private $descricao;

    public function __construct($codigo, $placa, $descricao) {
        $this->codigo = $codigo;
        $this->placa = $placa;
        $this->descricao = $descricao;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Você pode adicionar métodos adicionais conforme necessário.

    public function __toString() {
        return "Código do Veículo: " . $this->codigo . "<br>Placa: " . $this->placa . "<br>Descrição: " . $this->descricao;
    }
}
?>

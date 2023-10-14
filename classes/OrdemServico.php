<?php
class OrdemServico {
    private $numero;
    private $dataEmissao;
    private $valorTotal;
    private $dataConclusao;
    private $cliente;
    private $veiculo;
    private $mecanicos = []; // Uma ordem de serviço pode envolver vários mecânicos.
    private $servicos = [];  // Uma ordem de serviço pode conter vários serviços.
    private $pecas = [];     // Uma ordem de serviço pode exigir várias peças.

    public function __construct($numero, $dataEmissao, $cliente, $veiculo) {
        $this->numero = $numero;
        $this->dataEmissao = $dataEmissao;
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->valorTotal = 0; // Inicialmente, o valor total é zero.
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getDataEmissao() {
        return $this->dataEmissao;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function getDataConclusao() {
        return $this->dataConclusao;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getVeiculo() {
        return $this->veiculo;
    }

    public function adicionarMecanico($mecanico) {
        $this->mecanicos[] = $mecanico;
    }

    public function adicionarServico($servico) {
        $this->servicos[] = $servico;
    }

    public function adicionarPeca($peca) {
        $this->pecas[] = $peca;
    }

    // Implemente métodos para calcular o valor total da ordem de serviço e definir a data de conclusão.

    public function __toString() {
        return "Número da OS: " . $this->numero . "<br>Data de Emissão: " . $this->dataEmissao;
    }
}
?>

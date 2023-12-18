<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MecanicoModel;
use App\Models\ClienteModel;
use App\Models\EquipeModel;
use App\Models\OSModel;
use App\Models\PecaModel;
use App\Models\VeiculoModel;
use App\Models\ServicoModel;

class Inicio extends BaseController
{
    private $osModel;
    private $mecanicoModel;
    private $clienteModel;
    private $equipeModel;
    private $pecaModel;
    private $veiculoModel;
    private $servicoModel;

    public function __construct()
    {
        $this->osModel = new OSModel();
        $this->mecanicoModel = new MecanicoModel();
        $this->clienteModel = new ClienteModel();
        $this->equipeModel = new EquipeModel();
        $this->pecaModel = new PecaModel();
        $this->veiculoModel = new VeiculoModel();
        $this->servicoModel = new ServicoModel();
    }

    public function index()
    {
        $ordens = $this->osModel->findAll();
        $mecanicos = $this->mecanicoModel->findAll();
        $clientes = $this->clienteModel->findAll();
        $equipes = $this->equipeModel->findAll();
        $pecas = $this->pecaModel->findAll();
        $veiculos = $this->veiculoModel->findAll();
        $servicos = $this->servicoModel->findAll();

        $dados = [
            "ordens" => $ordens,
            "mecanicos" => $mecanicos,
            "clientes" => $clientes,
            "equipes" => $equipes,
            "pecas" => $pecas,
            "veiculos" => $veiculos,
            "servicos" => $servicos
        ];

        echo view('componentes/header');
        echo view('Views/home', $dados);
        echo view('componentes/navbar');
    }
    private function obterNomeVeiculo($veiculoId)
    {
        // Lógica para obter o nome do veículo com base no ID
        // Substitua isso com sua lógica de consulta ao banco de dados
        $veiculoModel = new VeiculoModel();
        $veiculo = $veiculoModel->find($veiculoId);

        // Supondo que o nome do veículo está em uma coluna chamada 'nome'
        return $veiculo['nome'] ?? 'Veículo não encontrado';
    }

    private function obterNomeEquipe($equipeId)
    {
        // Lógica para obter o nome da equipe com base no ID
        // Substitua isso com sua lógica de consulta ao banco de dados
        $equipeModel = new EquipeModel();
        $equipe = $equipeModel->find($equipeId);

        // Supondo que o nome da equipe está em uma coluna chamada 'nome'
        return $equipe['nome'] ?? 'Equipe não encontrada';
    }

    private function obterNomePeca($pecaId)
    {
        // Lógica para obter o nome da peça com base no ID
        // Substitua isso com sua lógica de consulta ao banco de dados
        $pecaModel = new PecaModel();
        $peca = $pecaModel->find($pecaId);

        // Supondo que o nome da peça está em uma coluna chamada 'nome'
        return $peca['nome'] ?? 'Peça não encontrada';
    }
}
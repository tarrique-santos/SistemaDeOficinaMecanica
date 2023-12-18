<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VeiculoModel;
use App\Models\ClienteModel;

class ListarAutomoveis extends BaseController
{
    private $veiculoModel;
    private $clienteModel;

    public function __construct()
    {
        $this->veiculoModel = new VeiculoModel();
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        $veiculos = $this->veiculoModel->findAll();

        foreach ($veiculos as &$veiculo) {
            $cliente = $this->clienteModel->find($veiculo['clienteid']);

            if ($cliente) {
                $veiculo['nomeCliente'] = $cliente['nome'];
            } else {
                $veiculo['nomeCliente'] = 'Cliente não encontrado';
            }
        }

        $dados = [
            "veiculos" => $veiculos,
        ];

        echo view('componentes/header');
        echo view("componentes/veiculos", $dados);
        echo view("componentes/navbar");
    }
}
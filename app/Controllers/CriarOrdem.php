<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Models\VeiculoModel;
use App\Models\EquipeModel;
use App\Models\PecaModel;
use App\Models\OSModel;

class CriarOrdem extends BaseController
{
    private $usuarioModel;
    private $veiculoModel;
    private $pecaModel;
    private $equipeModel;
    private $osModel;

    public function __construct()
    {
        $this->usuarioModel = new ClienteModel();
        $this->veiculoModel = new VeiculoModel();
        $this->pecaModel = new PecaModel();
        $this->equipeModel = new EquipeModel();
        $this->osModel = new OSModel();
    }

    public function index()
    {
        helper('form'); 
        $clientes = $this->usuarioModel->findAll();
        $veiculos = $this->veiculoModel->findAll();
        $pecas = $this->pecaModel->findAll();
        $equipes = $this->equipeModel->findAll();
        
        $dados = [
            "donos" => $clientes,
            'veiculos' => $veiculos,
            'pecas' => $pecas,
            'equipes' => $equipes
        ];
    
        return view('cadastrarOS', $dados);
    }
    
    public function criar()
    {
        $dados = $this->request->getPost();

        if ($this->osModel->save($dados)) {
            echo view('componentes/salvoComSucesso');
        } else {
            echo 'Erro ao salvar';
        }
    }
    public function listar()
    {
        $ordens = $this->osModel->findAll();
    
        foreach ($ordens as &$ordem) {
            $veiculo = $this->veiculoModel->getVeiculoById($ordem['veiculoid']);
    
            if ($veiculo) {
                $ordem['veiculoPlaca'] = $veiculo['placa'];
            } else {
                $ordem['veiculoPlaca'] = 'Veículo não encontrado';
            }
    
            $equipe = $this->equipeModel->getEquipeById($ordem['equipeid']);
            $ordem['equipeNome'] = $equipe['nome'];
    
            $peca = $this->pecaModel->getPecaById($ordem['pecaid']);
            $ordem['pecaNome'] = $peca['nome'];
        }
    
        $data['ordens'] = $ordens;
        echo view("componentes/header");
        echo view('listarOSs', $data);
        echo view("componentes/navbar");
    }
    
}
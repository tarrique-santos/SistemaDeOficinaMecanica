<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;
use App\Models\VeiculoModel;

class CadastrarVeiculo extends BaseController
{
    private $usuarioModel;
    private $veiculoModel;

    public function __construct()
    {
        $this->usuarioModel = new ClienteModel();
        $this->veiculoModel = new VeiculoModel();
    }

    public function index()
    {
        helper('form'); 
        $clientes = $this->usuarioModel->findAll();
    
        $donos = [
            "donos" => $clientes, // Alterei o nome da variável para "donos"
        ];
    
        return view('cadastrarVeiculo', $donos);
    }
    
    
    public function criar()
    {
        $dados = $this->request->getPost();

        if ($this->veiculoModel->save($dados)) {
            echo view('componentes/salvoComSucesso');
            // echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
    }
}
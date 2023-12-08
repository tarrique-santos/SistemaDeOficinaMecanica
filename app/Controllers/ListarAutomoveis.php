<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VeiculoModel;

class ListarAutomoveis extends BaseController
{
    private $veiculoModel;

    public function __construct()
    {
        $this->veiculoModel = new veiculoModel();
    }

    public function index()
    {
        $veiculos = $this->veiculoModel->findAll();

        $dados = [
            "veiculos" => $veiculos,
        ];
        echo view('componentes/header');
        echo view("componentes/veiculos",$dados);
        echo view("componentes/navbar");
    }
}
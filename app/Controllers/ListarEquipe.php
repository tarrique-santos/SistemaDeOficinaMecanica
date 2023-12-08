<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EquipeModel;

class ListarEquipe extends BaseController
{

    private $equipeModel;

    public function __construct()
    {
        $this->equipeModel = new EquipeModel();
    }

    public function index()
    {
        $pecas = $this->equipeModel->findAll();

        $dados = [
            "pecas" => $pecas,
        ];
        echo view("componentes/header");
        echo view("componentes/equipes", $dados);
        return view("componentes/navbar");    
    }
}
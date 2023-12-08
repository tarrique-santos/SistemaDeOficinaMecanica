<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PecaModel;

class ListarPecas extends BaseController
{

    private $pecaModel;

    public function __construct()
    {
        $this->pecaModel = new PecaModel();
    }

    public function index()
    {
        $pecas = $this->pecaModel->findAll();

        $dados = [
            "pecas" => $pecas,
        ];
        echo view("componentes/header");
        echo view("componentes/pecas", $dados);
        return view("componentes/navbar");    }
}
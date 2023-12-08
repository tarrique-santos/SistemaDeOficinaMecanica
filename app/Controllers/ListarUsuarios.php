<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;
use App\Models\MecanicoModel;

class ListarUsuarios extends BaseController
{
    private $usuarioModel;
    private $mecanicoModel;

    public function __construct()
    {
        $this->usuarioModel = new ClienteModel();
        $this->mecanicoModel = new MecanicoModel();
    }

    public function index()
    {
        $clientes = $this->usuarioModel->findAll();
        $mecanicos = $this->mecanicoModel->findAll();

        $dados = [
            "clientes" => $clientes,
            "mecanicos" => $mecanicos,
        ];

        echo view("componentes/header");
        echo view("componentes/usuarios", $dados);
        return view("componentes/navbar");
    }
}
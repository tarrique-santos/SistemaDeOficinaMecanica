<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EquipeModel;
use App\Models\MecanicoModel;

class ListarEquipe extends BaseController
{

    private $equipeModel;
    private $mecanicoModel;

    public function __construct()
    {
        $this->equipeModel = new EquipeModel();
        $this->mecanicoModel = new MecanicoModel();
    }

    public function index()
    {
        $equipes = $this->equipeModel->findAll();

        foreach ($equipes as &$equipe) {
            // Busca o mecânico associado à equipe
            $mecanico = $this->mecanicoModel->getMecanicoById($equipe['idmecanico']);

            if ($mecanico) {
                $equipe['nomeMecanico'] = $mecanico['nome'];
            } else {
                $equipe['nomeMecanico'] = 'Mecânico não encontrado';
            }
        }

        $dados = [
            "equipes" => $equipes,
        ];

        echo view("componentes/header");
        echo view("componentes/equipes", $dados);
        return view("componentes/navbar");
    }
}

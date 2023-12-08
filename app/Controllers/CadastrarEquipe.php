<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EquipeModel;
use App\Models\MecanicoModel;

class CadastrarEquipe extends BaseController
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
        helper('form');
    
        $mecanicos = $this->mecanicoModel->findAll();
        
        // Verifica se há mecanicos antes de passar para a view
        if (!empty($mecanicos)) {
            $data['mecanicos'] = $mecanicos;
            echo view("cadastrarEquipe", $data);
        } else {
            echo 'Nenhum mecânico encontrado.'; // ou trate conforme necessário
        }
    }
    public function criar()
    {
        $dados = $this->request->getPost();

        if ($this->equipeModel->save($dados)) {
            echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
    }
}
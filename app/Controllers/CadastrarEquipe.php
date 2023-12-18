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
        
        if (!empty($mecanicos)) {
            $data['mecanicos'] = $mecanicos;
            echo view("cadastrarEquipe", $data);
        } else {
            echo 'Nenhum mecânico encontrado.';
        }
    }

    public function criar()
    {
        $dados = $this->request->getPost();
    
        // Certifique-se de que o índice 'idmecanico' existe antes de usá-lo
        if (isset($dados['idmecanico']) && is_array($dados['idmecanico'])) {
            // Converta o array de IDs em uma string separada por vírgulas
            $idMecanicos = implode(',', $dados['idmecanico']);
    
            // Adicione a string ao array de dados
            $dados['idmecanico'] = $idMecanicos;
        }
        // $this->equipeModel->save($dados);
        if ($this->equipeModel->save($dados)) {
            echo view('componentes/salvoComSucesso');
            // echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
    }
    
}
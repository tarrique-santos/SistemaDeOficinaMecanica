<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MecanicoModel;

class CadastrarMecanico extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new MecanicoModel();
    }

    public function index()
    {
        helper('form');
        echo view('cadastrarMecanico');
    }

    public function criar()
    {
       
        $dados = $this->request->getPost();
        //dd($dados);

        if ($this->userModel->save($dados)) {
            echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
    
    }
}
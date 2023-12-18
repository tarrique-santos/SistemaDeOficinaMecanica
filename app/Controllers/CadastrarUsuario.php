<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class CadastrarUsuario extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new ClienteModel();
    }

    public function index()
    {
        helper('form');
        echo view('cadastrarUsuario');
    }

    public function criar()
    {
       
        $dados = $this->request->getPost();
        //dd($dados);

        if ($this->userModel->save($dados)) {
            echo view('componentes/salvoComSucesso');
            // echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PecaModel;

class CadastrarPeca extends BaseController
{
    private $pecaModel;

    public function __construct()
    {
        $this->pecaModel = new PecaModel();
    }

    public function index()
    {
        helper('form');
        $data['msg'] = '';
       
        echo view('cadastrarPeca',$data);
    }

    public function criar()
    {
        $dados = $this->request->getPost();
        //dd($dados);

        if ($this->pecaModel->save($dados)) {
            echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
       
    }
}

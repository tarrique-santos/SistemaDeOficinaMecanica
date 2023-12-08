<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServicoModel;

class CadastrarServico extends BaseController
{
    private $servicoModel;

    public function __construct()
    {
        $this->servicoModel = new ServicoModel();
    }
    public function index()
    {
        helper('form');
        echo view("cadastrarServico");
    }
    public function criar()
    {
        $dados = $this->request->getPost();
        //dd($dados);

        if ($this->servicoModel->save($dados)) {
            echo 'Salvou com sucesso';
        } else {
            echo 'Erro ao salvar';
        }
       
    }
    public function listar(){
        $servicos = $this->servicoModel->findAll(); // Consulta todas as servicos no banco de dados

        $data['servicos'] = $servicos;
        echo view("componentes/header");
        echo view('listarServicos', $data);
        echo view("componentes/navbar");
    }
}

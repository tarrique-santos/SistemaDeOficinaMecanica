<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Inicio extends BaseController
{
    private $userModel;
    public function __construct(){
        $this->userModel = new UsuarioModel();
    }
    public function index()
    {
        $mecanicos = $this->userModel->findAll(); 
        $dados =[
            "mecanicos"=> $mecanicos
        ];
        echo view('componentes/header');
        echo view('home',$dados);
        return view('componentes/navbar');
    }
}
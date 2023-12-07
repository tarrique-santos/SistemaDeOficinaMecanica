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
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $email = $_POST["email"];
        //     $senha = $_POST["senha"];
        //     echo "teste";

        //     if ($email === 'admin@gmail.com' && $senha === '123456') {
        //         header('Location: /home');
        //         echo "logou";
        //         exit;
        //     } else {
        //         header('Location: /login');
        //         echo "não logou";
        //         exit;
        //     }
        // }
        $mecanicos = $this->userModel->findAll(); 
        $dados =[
            "mecanicos"=> $mecanicos
        ];

        echo view('componentes/header');
        echo view('Views/home');
        echo view('componentes/navbar');
    }
}
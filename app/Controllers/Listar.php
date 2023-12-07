<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Listar extends BaseController
{
    public function index()
    {
        echo view('componentes/header');
        echo view('componentes/listar');
        echo view('listar');
        echo view('componentes/navbar');
    }
}

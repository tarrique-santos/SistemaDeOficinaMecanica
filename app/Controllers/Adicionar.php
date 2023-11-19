<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Adicionar extends BaseController
{
    public function index()
    {
        echo view('componentes/header');
        echo view('add');
        echo view('componentes/grid');
        echo view('componentes/navbar');
    }
}

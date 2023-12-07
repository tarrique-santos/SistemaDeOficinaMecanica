<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('form');
        var_dump($_SERVER);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            if ($email === "admin@gmail.com" || $senha === "123456") {
                
                var_dump($email);
                var_dump($senha);
                header('Location: /home');
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }
        return view('login');
    }
}
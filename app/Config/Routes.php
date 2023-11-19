<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/inicio','Inicio::index');
$routes->get('/cadastros', 'Adicionar::index');
$routes->get('/cadastrarUsuario', 'CadastrarUsuario::index');
$routes->get('/cadastrarVeiculo', 'CadastrarVeiculo::index');
$routes->get('/cadastrarServico', 'CadastrarServico::index');
$routes->get('/cadastrarPeca', 'CadastrarPeca::index');
$routes->get('/cadastrarEquipe', 'CadastrarEquipe::index');
$routes->get('/criarOrdem', 'CriarOrdem::index');

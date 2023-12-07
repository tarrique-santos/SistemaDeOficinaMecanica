<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home','Inicio::index');
$routes->post('/home','Inicio::index');
$routes->get('/cadastros', 'Adicionar::index');
$routes->get('/cadastrarVeiculo', 'CadastrarVeiculo::index');
$routes->get('/cadastrarUsuario', 'CadastrarUsuario::index');
$routes->get('/cadastrarMecanico', 'CadastrarMecanico::index');
$routes->get('/cadastrarServico', 'CadastrarServico::index');
$routes->get('/cadastrarPeca', 'CadastrarPeca::index');
$routes->get('/cadastrarEquipe', 'CadastrarEquipe::index');
$routes->get('/criarOrdem', 'CriarOrdem::index');
$routes->get('/listar', 'Listar::index');
$routes->get('/listarUsuarios', 'ListarUsuarios::index');
$routes->post('/usuarios/criar', 'CadastrarUsuario::criar');
$routes->post('/mecanicos/criar', 'CadastrarMecanico::criar');
$routes->post('/pecas/criar', 'CadastrarPeca::criar');
$routes->post('/servicos/criar', 'CadastrarServicos::criar');
$routes->post('/equipes/criar', 'CadastrarEquipes::criar');
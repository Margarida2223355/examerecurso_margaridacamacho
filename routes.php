<?php
    require_once 'controllers/HomeController.php';
    require_once 'controllers/UserController.php';
    require_once 'controllers/LojaController.php';
    require_once 'controllers/ProdutoController.php';
    require_once 'controllers/FaturaController.php';
    require_once 'controllers/LinhafaturaController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    
    'home' => [
        'home' => ['GET', 'HomeController', 'home'],
        'index' => ['GET', 'HomeController', 'index'],
        'login' => ['POST', 'HomeController', 'login'],
        'logout' => ['GET', 'HomeController', 'logout'],
        'search' => ['GET', 'HomeController', 'search'],
    ],

    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'show' => ['GET', 'UserController', 'show'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],
    ],

    'loja' => [
        'index' => ['GET', 'LojaController', 'index'],
        'show' => ['GET', 'LojaController', 'show'],
        'create' => ['GET', 'LojaController', 'create'],
        'store' => ['POST', 'LojaController', 'store'],
        'edit' => ['GET', 'LojaController', 'edit'],
        'update' => ['POST', 'LojaController', 'update'],
        'delete' => ['GET', 'LojaController', 'delete'],
    ],

    'produto' => [
        'index' => ['GET', 'ProdutoController', 'index'],
        'show' => ['GET', 'ProdutoController', 'show'],
        'create' => ['GET', 'ProdutoController', 'create'],
        'store' => ['POST', 'ProdutoController', 'store'],
        'edit' => ['GET', 'ProdutoController', 'edit'],
        'update' => ['POST', 'ProdutoController', 'update'],
        'delete' => ['GET', 'ProdutoController', 'delete'],
    ],

    'fatura' => [
        'index' => ['GET', 'FaturaController', 'index'],
        'show' => ['GET', 'FaturaController', 'show'],
        'create' => ['GET', 'FaturaController', 'create'],
        'store' => ['POST', 'FaturaController', 'store'],
        'edit' => ['GET', 'FaturaController', 'edit'],
        'update' => ['POST', 'FaturaController', 'update'],
        'delete' => ['GET', 'FaturaController', 'delete'],
        'search' => ['POST', 'FaturaController', 'search'],
    ],

    'linhafatura' => [
        'index' => ['GET', 'LinhafaturaController', 'index'],
        'show' => ['GET', 'LinhafaturaController', 'show'],
        'create' => ['GET', 'LinhafaturaController', 'create'],
        'store' => ['POST', 'LinhafaturaController', 'store'],
        'edit' => ['GET', 'LinhafaturaController', 'edit'],
        'update' => ['POST', 'LinhafaturaController', 'update'],
        'delete' => ['GET', 'LinhafaturaController', 'delete'],
    ],
];

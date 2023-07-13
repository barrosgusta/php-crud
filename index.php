<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        include 'View/HomePage.html';
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/insert':
        PessoaController::insert();
    break;

    case '/pessoa/form/update':
        PessoaController::update();
    break;

    case '/pessoa/form/delete':
        PessoaController::delete();
    break;
}
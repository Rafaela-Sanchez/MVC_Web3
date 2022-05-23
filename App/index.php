<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';

switch($uri_parse)
{
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;
    
    
    
    case '/produto/formulario':
        ProdutoController::form();
    break;

    case '/processa':
        ProdutoController::save();
    break;

    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/ver':
        echo "ver detalhes de produto";
    break;

    case '/produto/delete':
        echo "remover produto";
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    default:
        echo "erro 404";
    break;
}
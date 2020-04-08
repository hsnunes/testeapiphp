<?php

// Habilitando Erros no php diretamente no codigo
// error_reporting(E_ALL ^ E_NOTICE);
// ini_set("display_errors", 1);

$path = explode('/', $_GET['path']);
//var_dump($path);die;
// Aqui pegamos o conteudo do nosso arquivo/banco json, para disponibilizar no codigo
$contents = file_get_contents('db.json');

// Converter o conteudo do arquivo json em objeto
$json = json_decode($contents, true);
//var_dump($json);die;

// Aqui pegamos o method da requisição que foi passado
$method = $_SERVER['REQUEST_METHOD'];

// Saída do conteúdo sempre será em Json
header('Content-type: application/json');

// Pegando os dados passados no body de toda requisição
$body = file_get_contents('php://input');

if ($method === 'GET') {
    if($json[$path[0]]){
        echo json_encode($json[$path[0]]);
    } else {
        echo '[]';
    }
}

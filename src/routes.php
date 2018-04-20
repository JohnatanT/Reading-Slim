<?php

use Psr\Http\Message\ServerRequestInterface as Request; //Dados Http recebidos
use Psr\Http\Message\ResponseInterface as Response;     //Dados Http enviados

$app->get('/hello',function(){
    return "Hello World";
});

$app->get('/hello/{name}',function (Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, {$name}");
    return $response;
});
<?php

use Psr\Http\Message\ServerRequestInterface as Request; //Dados Http recebidos
use Psr\Http\Message\ResponseInterface as Response;     //Dados Http enviados


$app->get('/hello[/[{name}]]',function (Request $request, Response $response){
    $name = !empty($request->getAttribute('name')) ? $request->getAttribute('name') : 'World';
    $response->getBody()->write("Hello, {$name}");
    return $response;
});
<?php

use Psr\Http\Message\ServerRequestInterface as Request; //Dados Http recebidos
use Psr\Http\Message\ResponseInterface as Response;     //Dados Http enviados


$app->get('/html/{name}',function (Request $request, Response $response, $args){
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hello[/[{name}]]',function (Request $request, Response $response){
    $name = !empty($request->getAttribute('name')) ? $request->getAttribute('name') : 'World';
    $response->getBody()->write("Hello, {$name}");
    return $response;
});
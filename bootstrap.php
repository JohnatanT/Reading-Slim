<?php 

use \Slim\App as App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


require __DIR__.'/vendor/autoload.php';

$app = new App;

$app->get('/hello/{name}',function (Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, {$name}");
    return $response;
});

$app->run();

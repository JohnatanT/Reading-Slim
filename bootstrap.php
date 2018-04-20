<?php 

require __DIR__.'/vendor/autoload.php';

//Arquivo de Configuração
$config = require __DIR__.'/src/config.php';

$app = new Slim\App($config);

//Arquivo de Rotas
require __DIR__. '/src/routes.php';

//Executa o código
$app->run();

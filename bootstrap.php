<?php 

use \Slim\App as App;

require __DIR__.'/vendor/autoload.php';

$app = new App;
$app->get('/hello',function (){
    return "Hello Word";
});

$app->run();

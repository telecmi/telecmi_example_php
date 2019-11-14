<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';
 
$app = new \Slim\App;
 
$handler = function (Request $req, Response $res) {

    $cdr = $req->getParsedBody();
    error_log(print_r($cdr, true));
    return $res->withStatus(204);
};
 
$app->post('/webhook/cdr', $handler);
$app->run();
 
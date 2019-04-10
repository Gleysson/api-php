<?php 
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class UserController{
    
    public function get( Request $request,  Response $response, $args) {
        return $response->withJson(array("nome" => $args['name']),200);
    }

}
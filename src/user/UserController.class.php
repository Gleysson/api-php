<?php 
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class UserController{

    private $service = null;


    public function __construct(){
        $this->service = new UserService();
        
    }

    
    public function get( Request $request,  Response $response, $args){   
            $users = $this->service->list();
            return $response->withJson($users['data'],$users['status']);

    }

    public function post( Request $request,  Response $response, $args){
        $users = $this->service->list();
        return $response->withJson($users['data'],$users['status']);

    }

}
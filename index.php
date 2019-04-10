<?php

use \Slim\App as SlimApp;

require "./vendor/autoload.php";
require "./src/config.php";


class App
{

    private $app;
    private $config = ['settings' => ['addContentLengthHeader' => false]];

    function __construct()
    {
        $this->app = new SlimApp($this->config);
        $this->routes();
        $this->app->run();
    }

    private function routes()
    {
        $this->app->group('/v1', function(){
            $this->get('/users/{name}', '\UserController:get');
        });    
    }
}


new App();

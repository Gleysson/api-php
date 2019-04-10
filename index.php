<?php

use \Slim\App as SlimApp;

require "./vendor/autoload.php";
require "./src/app.config.php";


class App
{

    private $app;
    private $config = ['settings' => [
        'addContentLengthHeader' => false, 
        'displayErrorDetails' => true
        ]
    ];

    function __construct()
    {
        $this->app = new SlimApp($this->config);
        $this->routes();
        $this->app->run();
    }

    private function routes()
    {
        $this->app->group('/v1', function()
        {

            $this->group('/users', function()
            {
                $this->get('', '\UserController:get');
                $this->post('', '\UserController:post');

            });

        });    
    }
}


new App();

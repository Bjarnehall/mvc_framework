<?php
/**
 * Class Application
 * 
 * @package app\core
 */

namespace app\core;

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }


    public function run()
    {
        $this->router->resolve();
    }
}
<?php
namespace App;

use Slim\App;
use App\Loader\ServiceLoader;
use App\Loader\RouteLoader;
use App\Loader\MiddlewareLoader;

/**
 * {@inheritDoc}
 */
class Application extends App
{
    private $dir = null;

    public function __construct($container = [])
    {
        parent::__construct($container);
        $this->loadServices();
        $this->loadRoutes();
        $this->loadMiddleware();
    }

    private function loadServices()
    {
        $serviceLoader = new ServiceLoader();
        $serviceLoader->loadServices($this);
    }

    private function loadRoutes()
    {
        $routeLoader = new RouteLoader();
        $routeLoader->loadRoutes($this);
    }

    private function loadMiddleware()
    {
        $middlewareLoader = new MiddlewareLoader();
        $middlewareLoader->loadMiddlewares($this);
    }

    /**
     * Get root directory.
     * @return string
     * @throws ConstantNotSetException
     */
    public function getRootDir()
    {
        if(!defined('APP_ROOT')){
            throw new ConstantNotSetException('Application root not defined.');
        }

        return APP_ROOT;
    }
}
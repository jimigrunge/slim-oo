<?php
namespace App\Loader;

use App\Application;

class MiddlewareLoader
{
    /**
     * MiddlewareLoader constructor.
     */
    public function __construct(){}

    /**
     * Load all Middleware definitions in the config middleware directory
     *
     * @param Application $app
     * @return Application
     */
    public function loadMiddlewares(Application $app)
    {
        $directory = $app->getContainer()["settings"]["middleware_config_dir"];
        foreach (array_diff(scandir($directory), ['..', '.']) as $filename) {
            $path = $directory . '/' . $filename;
            if (!is_dir($path)){
                require $path;
            }
        }
        return $app;
    }
}

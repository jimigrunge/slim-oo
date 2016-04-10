<?php
namespace App\Loader;

use App\Application;

class RouteLoader
{
    /**
     * RouteLoader constructor.
     */
    public function __construct(){}

    /**
     * Load all Route definitions in the config routes directory
     *
     * @param Application $app
     * @return Application
     */
    public function loadRoutes(Application $app)
    {
        $directory = $app->getContainer()["settings"]["route_config_dir"];
        foreach (array_diff(scandir($directory), ['..', '.']) as $filename) {
            $path = $directory . '/' . $filename;
            if (!is_dir($path)){
                require $path;
            }
        }
        return $app;
    }
}
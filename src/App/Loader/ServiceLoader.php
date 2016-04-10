<?php
namespace App\Loader;

use App\Application;

class ServiceLoader
{
    /**
     * ServiceLoader constructor.
     */
    public function __construct(){}

    /**
     * Load all service definitions in the config services directory
     *
     * @param Application $app
     * @return Application
     */
    public function loadServices(Application $app)
    {
        $directory = $app->getContainer()["settings"]["service_config_dir"];
        foreach (array_diff(scandir($directory), ['..', '.']) as $filename) {
            $path = $directory . '/' . $filename;
            if (!is_dir($path)){
                require $path;
            }
        }
        return $app;
    }
}
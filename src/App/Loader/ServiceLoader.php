<?php
namespace App\Loader;

use App\Application as Application;
use Symfony\Component\Finder\Finder;

class ServiceLoader
{
    /** @var \Symfony\Component\Finder\Finder $finder */
    private $finder;

    /**
     * ServiceLoader constructor.
     */
    public function __construct(Finder $finder){
        $this->finder = $finder;
    }

    /**
     * Load all service definitions in the config services directory
     *
     * @param Application $app
     * @return Application
     */
    public function loadServices(Application $app, $directories)
    {
        $this->finder->files()->name('*.php')->depth(0)->in($directories);
        foreach ($this->finder as $file) {
            require $file->getRealpath();
        }
        return $app;
    }
}
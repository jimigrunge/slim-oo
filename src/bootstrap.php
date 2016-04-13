<?php
// Set the project's base
if (!defined('APP_ROOT')) {
    $spl = new SplFileInfo(__DIR__ . '/..');
    define('APP_ROOT', $spl->getRealPath());
}

$loader = require_once APP_ROOT.'/vendor/autoload.php';
$loader->setPsr4('App\\', 'src/App');

// Load Environment file
$dotEnv = new \Dotenv\Dotenv(APP_ROOT.'/configuration/environments','environments.env');
$dotEnv->load();

$settings = require APP_ROOT.'/configuration/settings.php';

return new App\Application($settings);
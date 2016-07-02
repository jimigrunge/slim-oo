<?php
// Application middleware
$container = $app->getContainer();

if ($container->get("settings")['debug']) {
    $app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware);
};

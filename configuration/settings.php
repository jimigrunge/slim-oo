<?php
return [
    'settings' => [
        'displayErrorDetails'   => true, // set to false in production
        'service_config_dir'    => APP_ROOT.'/configuration/services/',
        'route_config_dir'      => APP_ROOT.'/configuration/routes/',
        'middleware_config_dir' => APP_ROOT.'/configuration/middleware/',  

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
    ],
];

<?php
return [
    'settings' => [
        'displayErrorDetails' => getenv('DEBUG_DETAIL'), // set to false in production
        'service_directories' => [
            'services'    => APP_ROOT.'/configuration/services/',
            'middlewares' => APP_ROOT.'/configuration/middleware/',
            'routes'      => APP_ROOT.'/configuration/routes/',
        ], 

        // Renderer settings
        'renderer' => [
            'template_path'  => APP_ROOT.'/templates/',
            'template_cache' => APP_ROOT.'/cache/'
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
    ],
];

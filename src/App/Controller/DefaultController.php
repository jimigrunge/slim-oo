<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class DefaultController
{
    private $logger;
    private $renderer;

    public function __construct(LoggerInterface $logger, $renderer)
    {
        $this->logger   = $logger;
        $this->renderer = $renderer;
    }

    public function index(RequestInterface $request, ResponseInterface $response, $args)
    {
        // Sample log message
        $this->logger->info("Slim-Skeleton '/' route");

        // Render index view
        return $this->renderer->render($response, 'index.phtml', $args);
    }
}

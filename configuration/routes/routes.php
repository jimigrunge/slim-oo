<?php
// Routes

$app->get('/throw', 'DefaultController:throwException');
$app->get('/[{name}]', 'DefaultController:index');

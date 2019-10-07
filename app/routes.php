<?php

$routes = [];

$template = new \m\TemplateFactory(__DIR__ . '/view');

$routes['/'] = function() use ($template){
    
    return [200, ['Content-Type' => 'text/html'], $template->create("index", [
        'title' => 'Chibiさんのホームページのindex',
        'name' => 'Chibiさん'
    ])];
};

$routes['/phpinfo.php'] = function(){
    ob_start();
    phpinfo();
    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

return $routes;

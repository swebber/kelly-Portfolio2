<?php

function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    
    switch ($controller) {
        case 'home':
            $controller = new HomeController();
            break;
        case 'about':
            $controller = new AboutController();
            break;
        case 'portfolio':
            $controller = new PortfolioController();
            break;
        case 'resume':
            $controller = new ResumeController();
            break;
    }
    
    $controller->{ $action }();
}

$controllers = array(
    'home' => ['index', 'error'],
    'about' => ['index'],
    'portfolio' => ['index'],
    'resume' => ['index']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('home', 'error');
    }
} else {
    call('home', 'error');
}

?>
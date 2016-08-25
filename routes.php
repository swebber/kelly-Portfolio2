<?php

function call($controller, $action) {

    $controllerFile = 'controllers/' . $controller . '_controller.php';
    $modelFile = 'models/' . $controller . '.php';

    require_once($controllerFile);

    if (file_exists($modelFile)) {
        require_once($modelFile);
    }

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

    $controller->{ str_replace('-', '_', $action) }();
}

$controllers = array(
    'home' => ['index', 'error'],
    'about' => ['index'],
    'portfolio' => ['index', 'tickets', 'alphabet', 'archi-type', 'ashley-pa', 'east-cuisine', 'meat', 'mica-blog', 'belgrade', 'comparing-type', 'photography', 'printmaking'],
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

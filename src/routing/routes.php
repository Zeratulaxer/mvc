<?php

namespace App\routing;

use App\controller\AboutController;
use App\controller\HomeController;
use App\controller\StudentController;

Router::get('/', function() {
    $controller = new HomeController();

    $controller->index();
});

Router::get('/student', function() {
    $controller = new StudentController();

    $controller->add();
});

Router::get('/about', function() {
    $controller = new AboutController();

    $controller->about();
});
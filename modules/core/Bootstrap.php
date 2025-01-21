<?php

namespace Sepde\T10ProjWebsite;

use Kyrill\PhpRoute\Router;
use Sepde\T10ProjWebsite\Controllers\MainController;

class Bootstrap
{
    public function index(): void
    {
        $router = new Router();

        $router->addRoute('GET', '/', [MainController::class, 'index']);

        $router->resolveRoute();
    }

}
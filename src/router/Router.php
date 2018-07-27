<?php

namespace App\Router;

use App\Controller\FrontendController;

class Router
{

    private $frontendController;

    public function __construct()
    {
        $this->frontendController = new FrontendController();
    }

    public function run()
    {
        $klein = new \Klein\Klein();

        $klein->respond('GET', '/home', function () {
            $this->frontendController->home();
        });

        $klein->respond('GET', '/menus/[:type]', function ($request) {
            $this->frontendController->menus($request->type);
        });

        $klein->respond('GET', '/burgers/[:type]', function ($request) {
            $this->frontendController->burgers($request->type);
        });

        $klein->respond('GET', '/drinks', function () {
            $this->frontendController->drinks();
        });

        $klein->respond('GET', '/desserts', function () {
            $this->frontendController->desserts();
        });

        $klein->respond('GET', '/avis', function () {
            $this->frontendController->avis();
        });

        $klein->respond('GET', '/public/[*]', function($request, $response) {
            $response->file(__DIR__ . '..'. $request->pathname());
        });

        $klein->dispatch();
    }

}

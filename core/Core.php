<?php

class Core
{
    public function run(array $routes) {
        $url = '';
        $routerExists = false;

        if (isset($_SERVER['REQUEST_URI'])) {
            $url .= $_SERVER['REQUEST_URI'];
            if ($url !== '/') rtrim($url, '/');
            $url = parse_url($url, PHP_URL_PATH);
        }

        foreach ($routes as $path => $controller) {
            $pattern = '#^' . preg_replace('/{id}/', '(\w+)', $path) . '$#';

            if (preg_match($pattern, $url, $params)) {
                $routerExists = true;

                array_shift($params);

                [$controller, $method] = explode('@', $controller);

                require_once __DIR__ . "/../controllers/$controller.php";

                $controller = new $controller();
                $controller->$method(...$params);
            }
        }

        if (!$routerExists) {
            require_once __DIR__ . '/../controllers/NotFoundController.php';
            $notFoundController = new NotFoundController();
            $notFoundController->index();
        }
    }
}
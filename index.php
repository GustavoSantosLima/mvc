<?php 

require_once __DIR__ . '/core/Core.php';
require_once __DIR__ . '/router/routes.php';
require_once __DIR__ . '/utils/loadEnv.php';

spl_autoload_register(function ($class) {
    if (file_exists(__DIR__ . "/utils/$class.php")) {
        require_once __DIR__ . "/utils/$class.php";
    } elseif (file_exists(__DIR__ . "/models/$class.php")) {
        require_once __DIR__ . "/models/$class.php";
    }
});

$core = new Core();
$core->run($routes);
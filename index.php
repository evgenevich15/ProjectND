<?php
declare(strict_types=1);
define('ROOT', dirname(__FILE__));
require_once(ROOT.'\System\Router.php');
// Подключаем файл реализующий автозагрузку
require_once __DIR__ . '/System/autoload.php';

$router = new Router();
$router->run();
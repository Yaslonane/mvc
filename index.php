<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.04.2016
 * Time: 17:37
 */

// front controller


// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);


// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

// 3. Подключение к БД


// 4. Вызов router

$router = new Router();
$router->run();
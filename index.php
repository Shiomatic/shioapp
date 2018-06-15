<?php

use app\start;
use core\view;
use AltoRouter;

// autoload
require_once(__DIR__ . '/vendor/autoload.php');

// preset
$view = new view();
$router = new AltoRouter();

// routes
$router->map('GET', $view->config->basedir.'[a:area]/[a:page]?', '');
$match = $router->match();

// set view
$area = ($match['params']['area']) ? $match['params']['area'] : $_GET['area'];
$sub = ($match['params']['page']) ? $match['params']['page'] : $_GET['page'];

// load view
$current = ($area) ? $area : 'index';
$view->setView($current, $sub);

include_once('/public/layout.php');

?>
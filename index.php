<?php

define('VG_ACCESS', true);

header('Content-type:text/html;charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteExceptions;
use core\base\controllers\RouteController;

try{
    RouteController::getIntance()->route();
}
catch (RouteExceptions $e) {
    exit($e->getMessage());
}



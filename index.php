<?php

define('VG_ACCESS', true);

header('Content-type:text/html;charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';
require_once 'libraries/functions.php';



use core\base\exceptions\RouteExceptions;
use core\base\controller\RouteController;

try{
    RouteController::getInstance()->route();

//    echo "111";


}
catch (RouteExceptions $e) {
    exit($e->getMessage());
}



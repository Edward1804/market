<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'template/default/';
const ADMIN_TEMPLATE = 'core/admin/view/';
const UPLOAD_DIR = 'userfiles/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = 'G+KbPeShVmYq3t6w?D(G-KaPdSgVkYp3x!A%D*F-JaNdRgUk4t7w!z%C*F)J@NcRmYq3t6w9z$C&F)H@SgVkYp3s6v9y$B&EaNdRgUkXp2s5v8y/F)J@NcRfUjXn2r5u';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => ['css/main.css'],
    'scripts' => ['js/frameworkfunctions.js', 'js/scripts.js']
];

const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

use core\base\exceptions\RouteException;

function autoloadMainClasses($class_name){
    $class_name = str_replace('\\', '/', $class_name);

    if(!@include_once $class_name . '.php'){
        new RouteException('Не верно имя файла для подключения - '.$class_name);
    }

//    include $class_name . '.php';
}

spl_autoload_register('autoloadMainClasses');

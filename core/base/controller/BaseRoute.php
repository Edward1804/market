<?php


namespace core\base\controller;


class BaseRoute
{

    use Singleton, BaseMethods;

    public static function routeDirections(){

        if(self::instance()->isAjax()){

            exit((new BaseAjax())->route());

        }

        RouteController::instance()->route();

    }

}
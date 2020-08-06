<?php

namespace core\user\controller;

use core\base\controller\BaseController;

class IndexController extends BaseController {

    protected $name;

    protected function inputData(){

        $name = 'Ivan';

        $content = $this->render('', compact('name'));
        $header = $this->render(TEMPLATE.'header');
        $footer = $this->render(TEMPLATE.'footer');


        return compact('header', 'content', 'footer');

//        exit($template);
    }

//    protected function outputData(){
//        $vars = func_get_arg(0);
//
//        $this->page = $this->render(TEMPLATE.'templater', $vars);
//    }
}
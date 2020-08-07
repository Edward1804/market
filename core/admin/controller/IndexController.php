<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData(){

        $db = Model::instance();

        $table = 'product';

        $files['gallery_img'] = ['red.jpg', 'blue.jpg', 'black.jpg'];
        $files['img'] = 'main_img.jpg';

        $res = $db->add($table, [
            'fields' => ['name' => 'katya', 'content' => 'Hello'],
            'except' => ['name'],
            'files' => $files
        ]);

        exit('content =' . $res['content'] . ' Name ' . $res['name']);
    }

}
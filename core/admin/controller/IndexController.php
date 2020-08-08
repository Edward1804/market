<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData(){

        $db = Model::instance();

        $table = 'product';

        $files['gallery_img'] = ['new_red.jpg'];
        $files['img'] = 'main_img.jpg';

        $files = [];

        $_POST['id'] = 7;
        $_POST['name'] = 'Oksana1';
        $_POST['content'] = "<p>New' book1</p>";

        $res = $db->edit($table, ['files' => $files]);

        exit('content =' . $res['content'] . ' Name ' . $res['name']);
    }

}
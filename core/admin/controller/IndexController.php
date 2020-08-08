<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData(){

        $db = Model::instance();

        $table = 'teachers';


        $res = $db->delete($table, [
            'where' => ['id' => 13],
            'join' => [
                [
                    'table' => 'students',
                    'on' => ['student_id', 'id']
                ]
            ]
        ]);

        exit('content =' . $res['content'] . ' Name ' . $res['name']);
    }

}
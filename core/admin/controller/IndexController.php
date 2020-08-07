<?php

namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController
{
    protected function inputData(){

        $db = Model::instance();

        $table = 'category';

        $color = ['red', 'blue', 'black'];

        $res = $db->get($table, [
            'fields' => ['id', 'name'],
            'where' => ['id' => '1,2,3,4', 'name' => 'Apple', 'fio' => 'andr', 'car' => 'Porshe', 'color' => $color],
            'operand' => ['IN', '%LIKE%', '=', '<>', 'NOT IN'],
            'condition' => ['AND', 'OR'],
            'order' => ['name', 'id'],
//            'order_direction' => ['DESC'],
            'limit' => '1'
        ]);

        exit('I am admin panel');
    }

}
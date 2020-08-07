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
            'limit' => '1',
            'join' => [
                [
                    'table' => 'join_table1',
                    'fields' => ['id as j_id', 'name as j_name'],
                    'type' => 'left',
                    'where' => ['name' => 'sasha'],
                    'opearand' => ['='],
                    'condition' => ['OR'],
                    'on' => [
                        'table' => 'category',
                        'fields' => ['id', 'parent_id']
                    ]
                ],
                'join_table1' => [
                    'table' => 'join_table1',
                    'fields' => ['id as j_id', 'name as j_name'],
                    'type' => 'left',
                    'where' => ['name' => 'sasha'],
                    'opearand' => ['='],
                    'condition' => ['OR'],
                    'on' => [
                        'table' => 'category',
                        'fields' => ['id', 'parent_id']
                    ]
                ]
            ]
        ]);

        exit('I am admin panel');
    }

}
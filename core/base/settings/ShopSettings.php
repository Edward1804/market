<?php


namespace core\base\settings;



class ShopSettings
{
    use BaseSettings;

    private $routes = [
        'plugins' => [
            'dir' => false,
            'routes' => [
                'route1' => ['1', '2']
            ]
        ],
    ];

    private $templateArr = [
        'text' => ['price', 'short'],
        'textarea' => ['goods_content']
    ];




}
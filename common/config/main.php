<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],



        'elasticsearch' => [
            'class' => 'yii\elasticsearch\Connection',
            //'auth' => ['username' => 'elastic2@yopmail.com', 'password' => 'elastic2@yopmail.com'],
            'nodes' => [
                [
                    'http_address' => '127.0.0.1:9200',
                ],
            ],
        ],


    ],
];

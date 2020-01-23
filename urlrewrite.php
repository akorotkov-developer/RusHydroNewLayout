<?php
$arUrlRewrite=array (
    0 =>
    array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
    ),
    1 =>
    array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
    ),
    2 =>  array (
        'CONDITION' => '#^/community/istorii-uspekha/#',
        'RULE' => '',
        'ID' => 'bitrix:news',
        'PATH' => '/community/istorii-uspekha/index.php',
        'SORT' => 100,
    ),
    3 => array (
        'CONDITION' => '#^/community/istorii-uspekha/([a-zA-Z0-9\\.\\-_]+)/?.*#',
        'RULE' => 'ELEMENT_ID=$1',
        'PATH' => '/community/istorii-uspekha/index.php',
        'SORT' => 100,
    ),
);

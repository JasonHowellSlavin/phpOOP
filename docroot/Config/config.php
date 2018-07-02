<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/11/18
 * Time: 3:18 PM
 */
return [
    'db' => [
        'dsn'      => 'mysql:dbname=oopPHP;host=mysql',
        'user'     => 'developer',
        'password' => 'developer',
    ],
    'form1' => [
        'text' => [
            'labelFor' => 'media-path',
            'labelText' => 'media-path',
        ],
        'text1' => [
            'labelFor' => 'title',
            'labelText' => 'title',
        ],
        'text2' => [
            'labelFor' => 'text',
            'labelText' => 'text',
        ],
        'checkbox1' => [
            'labelFor' => 'isVideo',
            'labelText' => 'video',
        ],
        'submit' => ['value' => 'sumbit'],
    ]
];
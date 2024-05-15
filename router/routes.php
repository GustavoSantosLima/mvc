<?php

$routes = [
    '/' => 'UserController@index',
    '/users' => 'UserController@index',
    '/users/{id}' => 'UserController@show'
];
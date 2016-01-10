<?php

$router->group(['middleware' => ['auth:web_users']], function ($router) {
    $router->get('/', [
        'uses' => 'UsersController@index',
        'as' => 'user.index',
    ]);
});

$router->get('entrar', [
    'uses' => 'AuthController@index',
    'as' => 'user.auth.index',
]);

$router->post('entrar', [
    'uses' => 'AuthController@login',
    'as' => 'user.auth.login',
]);

$router->get('sair', [
    'uses' => 'AuthController@logout',
    'as' => 'user.auth.logout',
]);

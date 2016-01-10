<?php

$router->group(['middleware' => ['auth:web_resellers']], function ($router) {
    $router->get('/', [
        'uses' => 'ResellersController@index',
        'as' => 'reseller.index',
    ]);
});

$router->get('entrar', [
    'uses' => 'AuthController@index',
    'as' => 'reseller.auth.index',
]);

$router->post('entrar', [
    'uses' => 'AuthController@login',
    'as' => 'reseller.auth.login',
]);

$router->get('sair', [
    'uses' => 'AuthController@logout',
    'as' => 'reseller.auth.logout',
]);

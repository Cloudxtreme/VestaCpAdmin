<?php

$router->group(['middleware' => ['auth:web_admins']], function ($router) {
    $router->get('/', [
        'uses' => 'AdminsController@index',
        'as' => 'admin.index',
    ]);
    
    Route::controller('servers', 'ServerController');
    Route::controller('resellers', 'ResellerController');
    Route::controller('administrators', 'AdministratorController');
    
});

$router->get('entrar', [
    'uses' => 'AuthController@index',
    'as' => 'admin.auth.index',
]);

$router->post('entrar', [
    'uses' => 'AuthController@login',
    'as' => 'admin.auth.login',
]);

$router->get('sair', [
    'uses' => 'AuthController@logout',
    'as' => 'admin.auth.logout',
]);




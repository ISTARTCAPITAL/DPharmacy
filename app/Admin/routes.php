<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('patients', PatientController::class);
    $router->resource('doctors', DoctorController::class);
    $router->resource('pharmacists', PharmacistController::class);
    $router->resource('requests', RequestController::class);
    $router->resource('transactions', TransactionController::class);
});

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::resource('/inicio', 'DashboardController', [
    'names' => [
        'index' => 'dashboard',
        'store' => 'dashboard.store',
        'create' => 'dashboard.create',
        'show' => 'dashboard.show',
        'destroy' => 'dashboard.destroy',
        'update' => 'dashboard.update',
        'edit' => 'dashboard.edit',
    ],
    'except' => [
        'create','store', 'edit', 'update', 'destroy', 'show'
    ]

]);

Route::resource('/usuarios', 'UserController', [
    'names' => [
        'index' => 'user',
        'store' => 'user.store',
        'create' => 'user.create',
        'show' => 'user.show',
        'destroy' => 'user.destroy',
        'update' => 'user.update',
        'edit' => 'user.edit',
    ],
    'except' => [

    ]
]);

Route::resource('/avaliacoes', 'AssessmentsController', [
    'names' => [
        'index' => 'Assessments',
        'store' => 'Assessments.store',
        'create' => 'Assessments.create',
        'show' => 'Assessments.show',
        'destroy' => 'Assessments.destroy',
        'update' => 'Assessments.update',
        'edit' => 'Assessments.edit',
    ],
    'except' => [

    ]
]);


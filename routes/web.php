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

Route::resource('/atividades', 'AssessmentsController', [
    'names' => [
        'index' => 'assessments',
        'store' => 'assessments.store',
        'create' => 'assessments.create',
        'show' => 'assessments.show',
        'destroy' => 'assessments.destroy',
        'update' => 'assessments.update',
        'edit' => 'assessments.edit',
    ],
    'except' => [

    ]
]);

Route::resource('/questoes', 'QuestionsController', [
    'names' => [
        'index' => 'questions',
        'store' => 'questions.store',
        'create' => 'questions.create',
        'show' => 'questions.show',
        'destroy' => 'questions.destroy',
        'update' => 'questions.update',
        'edit' => 'questions.edit',
    ],
    'except' => [

    ]
]);
Route::get('/questoes/resolver',[
    'as' => 'questions.solve', 'uses' => 'QuestionsController@showQuestions'
]);

Route::post('/questoes/resultado',[
    'as' => 'questions.result', 'uses' => 'QuestionsController@result'
]);




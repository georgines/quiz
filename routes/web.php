<?php


Route::get('/', function () {
    return redirect('login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
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
            'create', 'store', 'edit', 'update', 'destroy', 'show'
        ]

    ]);
});

Route::group(['middleware' => ['auth']], function () {


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
            'create', 'store', 'edit', 'update', 'destroy', 'show'
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
            'edit', 'update', 'show'
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
            'edit', 'update', 'show'
        ]
    ]);


});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/resolver', 'QuestionsController@showquestions')->name('questions.solve');
    Route::post('/resolver/resultado', 'QuestionsController@result')->name('questions.result');
    Route::get('/relatorio', 'ReportController@report')->name('questions.report');
});

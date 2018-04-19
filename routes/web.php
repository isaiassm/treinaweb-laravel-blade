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
    return view('news.index')->with([
        'name' => 'Blog do Treinaweb',
        'slug' => 'Laravel Blade',
        'description' => 'Novidades de tecnologia',
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheca as novidades do php...'
            ],
            [
                'subject' => 'Novidades do C# 8',
                'content' => 'Conheca as novidades do C#...'
            ]
        ]
    ]);
});

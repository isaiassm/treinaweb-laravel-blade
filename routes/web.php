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
        'paginate' => true,
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheca as novidades do php...',
                'author'  => 'Elton Fonseca',
                'date'    => '24 de Abril de 2019',
                'category'=> 'php'  
            ],
            [
                'subject' => 'Novidades do C# 8',
                'content' => 'Conheca as novidades do C#...',
                'author'  => 'Elton Fonseca',
                'date'    => '24 de Abril de 2019',
                'category'=> 'c#'  
            ],
            [
                'subject' => 'Novidades do Java 10',
                'content' => 'Conheca as novidades do Java...',
                'author'  => 'Elton Fonseca',
                'date'    => '24 de Abril de 2019',
                'category'=> 'java'  
            ],
            [
                'subject' => 'Novidades do JavaScript',
                'content' => 'Conheca as novidades do Javascript...',
                'author'  => 'Elton Fonseca',
                'date'    => '24 de Abril de 2019',
                'category'=> 'javascript'  
            ]
        ]
    ]);
});

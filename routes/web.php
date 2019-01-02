<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);

    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

    $router->post('authors', ['uses' => 'AuthorController@create']);

    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);


    $router->get('books',['uses' => 'BookController@showAllBooks']);

    $router->get('books/{id}', ['uses' => 'BookController@showOneBook']);

    $router->post('books', ['uses' => 'BookController@create']);

    $router->delete('books/{id}', ['uses' => 'BookController@delete']);

    $router->put('books/{id}', ['uses' => 'BookController@update']);


    $router->get('book_author',['uses' => 'book_authorController@showAllAuthors_book']);

    $router->get('book_author/{id}', ['uses' => 'book_authorController@showOneAuthor_book']);

    $router->post('book_author', ['uses' => 'book_authorController@create']);

    $router->delete('book_author/{id}', ['uses' => 'book_authorController@delete']);

    $router->put('book_author{id}', ['uses' => 'book_authorController@update']);
});

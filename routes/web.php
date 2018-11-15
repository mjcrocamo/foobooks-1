<?php

/*
 * Home
 */
Route::get('/', 'WelcomeController');


/**
 * Books
 */
Route::get('/books/search', 'BookController@search');
Route::get('/books/search-process', 'BookController@searchProcess');

Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');

Route::get('/books/{title}', 'BookController@show');
Route::get('/books', 'BookController@index');


/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');


/*
 * Pages
 * Simple, static pages without a lot of logic
 */
Route::view('/about', 'about');
Route::view('/contact', 'contact');


# Example shown at the end of Week 6's lectures
# to discuss the kind of planning work you can do for Project 3
//Route::get('/', 'TriviaController@index');
//Route::get('/check-answer', 'TriviaController@checkAnswer');

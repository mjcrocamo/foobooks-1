<?php

Route::get('/', 'WelcomeController');

Route::get('/books/{title}', 'BookController@show');
Route::get('/books', 'BookController@index');

# Example shown at the end of Week 6's lectures
# to discuss the kind of planning work you can do for Project 3
//Route::get('/', 'TriviaController@index');
//Route::get('/check-answer', 'TriviaController@checkAnswer');

# Example with two route parameters
//Route::get('/books/{category}/{title}', function($category, $title) {
//    return 'You are viewing the book: '.$title.' in the category '.$category;
//});
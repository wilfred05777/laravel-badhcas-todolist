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
    return view('welcome');
});


Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::get('/todos', [
    'uses' => 'TodosController@index'
]);

Route::get('/todo/delete/{id}',[
    'uses' => "TodosController@delete",
    'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}',[
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
    'uses' => "TodosController@save",
    'as' => 'todo.save'
]);

Route::post('/create/todo', [
    'uses' => "TodosController@store",
    'as' => "todos.save"
]);

Route::get('/todos/completed/{id}',[
    'uses' => 'TodosController@completed',
    'as' => 'todos.completed'
]);






Route::get('/person', 'PersonController@index');
//Route::get('/person', [
//   'uses' => 'PersonController@index'
//]);
//Route::get('/todos', function (){
//    return view('todos');
//});

//use app\Person;
//Route::get('/person/{person}', function (Person $person){
//    return $person;
//});

Route::resource('persons', 'PersonController');

Route::resource('products', 'ProductController');

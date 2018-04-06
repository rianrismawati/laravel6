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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('new');
// });
// Route::post('/', 'userController@show');
// Route::view('/', 'new');//ngambil view lngsng di route

// Route::get('/new/{id}', function($id){
// 	return $id;
// }); //ngambil id

// Route::redirect('/old', '/new', 301); //redirect halaman 

// Route::get('/', function(){
// 	return view('block.block');
// });

// Route::get('/', function () {
//     return view('newSess');
// });
// Route::post('/about', 'userController@show');

// Route::get('/', function () {
//     return view('new');
// });
// Route::post('/about', 'userController@show');

// Route::get('/', function(){
// 	App::setlocale('indo');
// 	return view('language');
// });
// Route::view('/about', 'about');

Route::get('/', 'userController@store');





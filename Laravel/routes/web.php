<?php

use App\Http\Controllers\DbController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

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
// Route::view('/','home');

//{ Add, Delete, Update, Show
Route::get('/','DbController@dbQuery');
Route::post('/add','DbController@AddRow');
Route::view('/add','Add');
Route::get('/show','DbController@Show');

Route::get('/edit/{id}','DbController@Edit');

Route::get('/delete/{id}','DbController@Delete');

Route::post('edit/update/{id}','DbController@Update');
Route::view('/add','Add');
//}
// Route::view('/contact', 'contact');
// Route::get('/Add/{name?}','DbController@dbQuery')->where('name','REGEXP','[A*]');
// Route::resource('/resource', 'ResourceController')->only(['index','show']);
// Route::get('/contact/{$id}', function($id){
//     $pages=[
//         1=>['title'=>'Hello From Page 1',],
//         2=>['title'=>'Hello From Page 2',],
//         3=>['title'=>'Hello From Page 3',],
//     ];
//     return view('contact',['data'=>$pages[$id]]);
// });

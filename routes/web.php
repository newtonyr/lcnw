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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',['as'=>'index','uses'=>'WebSiteController@index']);
Route::get('/nikolaus',['as'=>'nikolaus','uses'=>'WebSiteController@nikolaus']);
Route::get('/enlaces',['as'=>'enlaces','uses'=>'WebSiteController@enlaces']);
Route::get('/profesores',['as'=>'profesores','uses'=>'WebSiteController@profesores']);
Route::get('/preparadores',['as'=>'preparadores','uses'=>'WebSiteController@preparadores']);
Route::get('/coordinador',['as'=>'coordinador','uses'=>'WebSiteController@coordinador']);
Route::get('/becarios',['as'=>'becarios','uses'=>'WebSiteController@becarios']);
Route::get('/contacto',['as'=>'contacto','uses'=>'WebSiteController@contacto']);

Route::get('/admin',['as'=>'admin','uses'=>'AdminController@index']);
Route::get('/admin/solvencia',['as'=>'admin.solvencia','uses'=>'AdminController@solvencia']);
Route::post('/admin/solvencia',['as'=>'post.solvencia','uses'=>'AdminController@postsolvencia']);
Route::get('/email/solvencia',['as'=>'mail.solvencia','uses'=>'AdminController@mailsolvencia']);
Route::get('/admin/profesores',['as'=>'admin.profesores','uses'=>'AdminController@profesores']);
Route::get('/admin/horarios',['as'=>'admin.horarios','uses'=>'AdminController@horarios']);
Route::get('/admin/configuracion',['as'=>'admin.configuracion','uses'=>'AdminController@configuracion']);

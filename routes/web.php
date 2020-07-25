<?php

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

// exemplo: ControllerNosso@nomedometódo
Route::get('/', 'PostController@create')->name('home');

// variável de URL
Route::get('/ola/{nome_cliente}/{sobrenome_cliente}', 'SiteController@ola')->name('ola');

Route::get('/pagina', 'SiteController@pagina');

Route::get('/contato', 'SiteController@contato')->name('contato');

Route::get('/post/create', 'PostController@create')->name('post_create'); // {{ route('post_create') }}

Route::post('/post/insert', 'PostController@insert')->name('post_insert');

Route::get('/post/read', 'PostController@read')->name('post_read');

Route::get('/post/delete/{post_id}', 'PostController@delete')->name('post_delete');
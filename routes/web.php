<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UploadFoto;

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

Auth::routes();


/*Route::post('/livros/search',  [App\Http\Controllers\LivroController::class, 'search'])->name('livros.search');*/
Route::post('/upload', 'UploadFoto@store')->name('upload.foto.user');

Route::get('/altera_user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'edit']);
Route::post('/update_user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'update']);

Route::get('/del_user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'delete']);
Route::post('/delete_user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy']);

Route::get('/user_area/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'show']);


Route::get('/mostrar_todos', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('mostrar_todos');

Route::get('/livros/mostrar_livros', [App\Http\Controllers\LivroController::class, 'index'])->name('livros/mostrar_livros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', function(){
    $user = new stdClass();
    $user->name = 'Mr. Book8';
    $user->email = 'site.mrbook@gmail.com';
    Mail::send('mail.treinaweb', ['curso'=>'eloquent'], function($m){
        $m->from('site.mrbook@gmail.com', 'isa');
        $m->to('isabelacnavarro2@gmail.com');
    });
});  

Route::get('/cadastro', [App\Http\Controllers\Auth\RegisterController::class, 'edit']);

Route::get('/cad_livros', [App\Http\Controllers\LivroController::class, 'index']); /* na pagina que chama o form de cadastro*/
Route::post('/cadastro_livros',[App\Http\Controllers\LivroController::class, 'create']); /*no form de cadastro, ele manda as informações*/

Route::get('/avaliar', function () {
    return view('livros/cadastro');
}); /*depois chama o controller*/

/*Route::get('/explorar', function () {
    return view('livros/mostrar_livros');
});*/

Route::get('/alugar/{id}', [App\Http\Controllers\LivroController::class, 'alugar']);

Route::get('/perfil', [App\Http\Controllers\LivroController::class, 'perfil']);

Route::post('/livros/pesquisa', [App\Http\Controllers\LivroController::class, 'pesquisa'])->name('livros.pesquisa');
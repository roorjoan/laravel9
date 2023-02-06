<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
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

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');

//CRUD post
Route::get('/blog', [PostController::class, 'index'])->name('posts.index'); //ruta listar
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create'); //ruta mostrar formulario de crear
Route::post('/blog', [PostController::class, 'store'])->name('posts.store'); //ruta guardar
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show'); //ruta detalles
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); //ruta mostrar formulario de editar
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update'); //ruta actualizar
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); //ruta destroy

Route::view('/about', 'about')->name('about');

//Register and login users
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterUserController::class, 'store']);
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

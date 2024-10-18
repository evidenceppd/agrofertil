<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabalheController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\OuvidoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/comunicacao', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/comunicacao/{posts}', [App\Http\Controllers\BlogController::class, 'single'])->name('blog.single');
Route::get('/comunicacao-busca', [App\Http\Controllers\BlogController::class, 'search'])->name('blog.search');
Route::get('/termos-de-uso', [App\Http\Controllers\SiteController::class, 'termos'])->name('termos-condicoes');
Route::get('/politica-de-privacidade', [App\Http\Controllers\SiteController::class, 'politica'])->name('politica');
Route::resource('/trabalhe-conosco', TrabalheController::class);
Route::resource('/contato', ContatoController::class);
Route::resource('/ouvidoria', OuvidoriaController::class);
Route::prefix('galeria')->group(function () {
    Route::get('/', [App\Http\Controllers\GalleryController::class, 'index'])->name('galeria');
    Route::get('/{galeria}', [App\Http\Controllers\GalleryController::class, 'single'])->name('galeria.single');
});


// Rotas do Sistema Administrativo:
Route::redirect('/home', '/admin');
Auth::routes(['verify' => true]);
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/{user}/editar', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::get('/usuarios/criar', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::Post('/usuarios/deletar/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');
    Route::Post('/usuarios/{user}/editar/confirma', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::Post('/usuarios/criar/criar-usuario', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::post('/blog/{post}/editar/imgremove/{img}', [App\Http\Controllers\PostsController::class, 'remove'])->name('props.remove');
    Route::get('/blog', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
    Route::get('/blog/criar', [App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
    Route::post('/blog/criar/criar-post', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
    Route::get('/blog/{post}/editar', [App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
    Route::post('/blog/deletar/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.destroy');
    Route::post('/blog/{post}/editar/confirma', [App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
    Route::post('/blog/{post}/editar/remover-imagem', [App\Http\Controllers\PostsController::class, 'update_remove_image'])->name('posts.update_remove_image');
    Route::get('/categorias', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/categorias/criar', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/categorias/criar/criar-categoria', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categorias/{category}/editar', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
    Route::post('/categorias/{category}/editar/confirma', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
    Route::post('/categorias/{category}/editar/remover-imagem', [App\Http\Controllers\CategoriesController::class, 'update_remove_image'])->name('categories.update_remove_image');
    Route::post('/categorias/deletar/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');
});

Auth::routes();

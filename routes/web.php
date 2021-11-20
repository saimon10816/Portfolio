<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AddAwardsPageController;
use App\Http\Controllers\AddBooksPageController;
use App\Http\Controllers\AwardPageController;
use App\Http\Controllers\BookPageController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\MediaPageController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [PagesController::class, 'index'])->name('home');

//Route::get('/', [PagesController::class, 'main']);
//
//Route::get('/', [PagesController::class, 'about']);

Route::get('/admin/dashboard', [MainPagesController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');

Route::put('/admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');

Route::get('/admin/about', [AboutPageController::class, 'index'])->name('admin.about');

Route::put('/admin/about', [AboutPageController::class, 'update'])->name('admin.about.update');

//Route::get('/admin/book', [BookPageController::class, 'index'])->name('admin.book');
//
//Route::put('/admin/book', [BookPageController::class, 'update'])->name('admin.book.update');

Route::get('/admin/book/create', [AddBooksPageController::class, 'create'])->name('admin.book.create');

Route::post('/admin/book/create', [AddBooksPageController::class, 'store'])->name('admin.book.store');

Route::get('/admin/book/list', [AddBooksPageController::class, 'list'])->name('admin.book.list');

Route::get('/admin/book/edit/{id}', [AddBooksPageController::class, 'edit'])->name('admin.book.edit');

Route::post('/admin/book/update/{id}', [AddBooksPageController::class, 'update'])->name('admin.book.update');

Route::delete('/admin/book/delete/{id}', [AddBooksPageController::class, 'delete'])->name('admin.book.delete');


Route::get('/book/show/{id}', [AddBooksPageController::class, 'show'])->name('admin.book.show');




Route::get('/admin/award/create', [AddAwardsPageController::class, 'create'])->name('admin.award.create');

Route::post('/admin/award/create', [AddAwardsPageController::class, 'store'])->name('admin.award.store');

Route::get('/admin/award/list', [AddAwardsPageController::class, 'list'])->name('admin.award.list');

Route::get('/admin/award/edit/{id}', [AddAwardsPageController::class, 'edit'])->name('admin.award.edit');

Route::post('/admin/award/update/{id}', [AddAwardsPageController::class, 'update'])->name('admin.award.update');

Route::delete('/admin/award/delete/{id}', [AddAwardsPageController::class, 'delete'])->name('admin.award.delete');



Route::get('/admin/media/create', [MediaPageController::class, 'create'])->name('admin.media.create');

Route::post('/admin/media/create', [MediaPageController::class, 'store'])->name('admin.media.store');

Route::get('/admin/media/list', [MediaPageController::class, 'list'])->name('admin.media.list');

Route::get('/admin/media/edit/{id}', [MediaPageController::class, 'edit'])->name('admin.media.edit');

Route::post('/admin/media/update/{id}', [MediaPageController::class, 'update'])->name('admin.media.update');

Route::delete('/admin/media/delete/{id}', [MediaPageController::class, 'delete'])->name('admin.media.delete');




Route::get('/media/show/{id}', [MediaPageController::class, 'show'])->name('admin.media.show');






Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');


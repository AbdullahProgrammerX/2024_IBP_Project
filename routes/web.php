<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DuyuruController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerStore', [LoginController::class, 'registerStore'])->name('registerStore');
Route::post('/logincheck', [LoginController::class, 'logincheck'])->name('logincheck');
Route::get('/logouts', [LoginController::class, 'logouts'])->name('logouts');


//Route::middleware(['auth', 'login'])->group(function () {});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::post('/usercheck', [AdminController::class, 'usercheck'])->name('usercheck');
        Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');


        //******************** Admin Category ********************
        Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store')->middleware('auth');;
        Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/admin/category/show/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::get('/admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

        //******************** Admin Books ********************
        Route::get('/admin/books', [BooksController::class, 'index'])->name('admin.books');
        Route::get('/admin/books/create', [BooksController::class, 'create'])->name('admin.books.create');
        Route::post('/admin/books/store', [BooksController::class, 'store'])->name('admin.books.store');
        Route::post('/admin/books/update/{id}', [BooksController::class, 'update'])->name('admin.books.update');
        Route::get('/admin/books/show/{id}', [BooksController::class, 'show'])->name('admin.books.show');
        Route::get('/admin/books/edit/{id}', [BooksController::class, 'edit'])->name('admin.books.edit');
        Route::post('/admin/books/searchBooks', [BooksController::class, 'searchBooks'])->name('admin.books.searchBooks');
        Route::get('/admin/books/destroy/{id}', [BooksController::class, 'destroy'])->name('admin.books.destroy');


        //******************** Admin Message ********************
        Route::get('/admin/message', [MessageController::class, 'index'])->name('admin.message');
        Route::get('/admin/message/show/{id}', [MessageController::class, 'show'])->name('admin.message.show');
        Route::post('/admin/message/update/{id}', [MessageController::class, 'update'])->name('admin.message.update');


        //******************** Admin Duyuru ********************
        Route::get('/admin/duyuru', [DuyuruController::class, 'index'])->name('admin.duyuru');
        Route::get('/admin/duyuru/create', [DuyuruController::class, 'create'])->name('admin.duyuru.create');
        Route::post('/admin/duyuru/store', [DuyuruController::class, 'store'])->name('admin.duyuru.store');
        Route::get('/admin/duyuru/edit/{id}', [DuyuruController::class, 'edit'])->name('admin.duyuru.edit');
        Route::get('/admin/duyuru/show/{id}', [DuyuruController::class, 'show'])->name('admin.duyuru.show');
        Route::post('/admin/duyuru/update/{id}', [DuyuruController::class, 'update'])->name('admin.duyuru.update');
        Route::get('/admin/duyuru/destroy/{id}', [DuyuruController::class, 'destroy'])->name('admin.duyuru.destroy');

        //******************** Admin Users ********************
        Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
        Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');
        Route::post('/admin/users/store', [UsersController::class, 'store'])->name('admin.users.store');
        Route::post('/admin/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
        Route::get('/admin/users/show/{id}', [UsersController::class, 'show'])->name('admin.users.show');
        Route::get('/admin/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
        Route::get('/admin/users/destroy/{id}', [DuyuruController::class, 'destroy'])->name('admin.users.destroy');
    });

    Route::middleware(['auth', 'user'])->group(function () {

        //****************** user panel ***********************************
        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/user/books', [UserController::class, 'books'])->name('user.books');
        Route::get('/user/showBooks/{id}', [UserController::class, 'showBooks'])->name('user.showBooks');
        Route::get('/user/searchBooks/', [UserController::class, 'searchBooks'])->name('user.searchBooks');
        Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

        //******************** User Message ********************
        Route::get('/user/message', [UserController::class, 'messages'])->name('user.message');
        Route::get('/user/message/create', [UserController::class, 'messagesCreate'])->name('user.message.create');
        Route::post('/user/message/store', [UserController::class, 'messagesStore'])->name('user.message.store');
    });
});
// *****************  Admin Panel Router *************************

//Route::get('/user/message/edit/{id}', [UserController::class, 'edit'])->name('user.message.edit');
//Route::get('/user/message/show/{id}', [UserController::class, 'show'])->name('user.message.show');
//Route::post('/user/message/update/{id}', [MessageController::class, 'update'])->name('user.message.update');
//Route::get('/user/message/destroy/{id}', [MessageController::class, 'destroy'])->name('user.message.destroy');




<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// делаем группу для магазина
Route::group(['prefix'=>'shop'], function(){
    Route::get('/home', function () {
        return view('shop_doors/index');
    });
    Route::get('/auth', function () {
        return view('shop_doors/auth/index');
    });
});

Route::get('/', function () {
    return view('welcome');
});

// создаем группу с перфиксом admin
Route::group(['prefix'=>'admin'], function(){
    // мы создали контроллер где прописали путь вывода страницы с остальным фун-ями и теперь выводим страницу
    Route::get('/home', [\App\Http\Controllers\AdminController::class, 'Admin'])->name('admin');
    // вывод товаров в бд
    Route::get('/product', [\App\Http\Controllers\AdminProductController::class, 'AdminProduct'])->name('admin_product');
    // добавление товаров в бд шаблон
    Route::get('/add', [\App\Http\Controllers\AdminProductController::class, 'AdminAddProduct'])->name('admin_add_product');
    // удаления продуктов
    Route::delete('/add{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminDeleteProduct'])->name('admin_delete_product');
    // изменение продукта шаблон
    Route::post('/add{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminUpdateProduct'])->name('admin_update_product');
    //  изменение
    Route::post('/add/{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminEditProduct'])->name('admin_edit_product');
    // добавление в БД
    Route::post('/add/new', [\App\Http\Controllers\AdminProductController::class, 'AdminAddNewProduct'])->name('admin_create_product');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

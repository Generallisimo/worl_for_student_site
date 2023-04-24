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
    // главная страница
    Route::get('/home', [\App\Http\Controllers\ShopController::class, 'ShopHome'])->name('shop_home');
    // блог 
    Route::get('/blog', [\App\Http\Controllers\ShopBlogController::class, 'Blog'])->name('shop_blog');
    Route::get('/blog_one', [\App\Http\Controllers\ShopBlogController::class, 'BlogViewOne'])->name('shop_blog_view_one');
    Route::get('/blog_two', [\App\Http\Controllers\ShopBlogController::class, 'BlogViewTwo'])->name('shop_blog_view_two');
    // о нас
    Route::get('/about', [\App\Http\Controllers\ShopAboutController::class, 'About'])->name('shop_about');
    // категории
    Route::get('/categories{id}', [\App\Http\Controllers\ShopCategoriesController::class, 'Categories'])->name('shop_categories');
    // продукты
    Route::get('/category{product_id}', [\App\Http\Controllers\ShopViewController::class, 'ShopView'])->name('shop_view');
    Route::post('/category{product_id}', [\App\Http\Controllers\ShopViewController::class, 'ShopViewAdd'])->name('shop_view_add');
    // карзина
    Route::post('/home', [\App\Http\Controllers\ShopController::class, 'ShopAddCart'])->name('shop_add_cart');
    Route::put('/home{cart}', [\App\Http\Controllers\ShopController::class, 'ShopUpdateCart'])->name('shop_update_cart');
    Route::delete('/home{cart}', [\App\Http\Controllers\ShopController::class, 'ShopDeleteCart'])->name('shop_delete_cart');
    // страница авторизации
    Route::get('/auth', [\App\Http\Controllers\ShopAuthController::class, 'Auth'])->name('shop_auth');
    // корзина
    Route::get('/cart', [\App\Http\Controllers\ShopCartController::class, 'Cart'])->name('shop_cart');
});


// создаем группу с перфиксом admin
Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    // мы создали контроллер где прописали путь вывода страницы с остальным фун-ями и теперь выводим страницу
    Route::get('/home', [\App\Http\Controllers\AdminController::class, 'Admin'])->name('admin');
    // вывод товаров в бд
    Route::get('/product', [\App\Http\Controllers\AdminProductController::class, 'AdminProduct'])->name('admin_product');
    // добавление товаров в бд шаблон
    Route::get('/add', [\App\Http\Controllers\AdminProductController::class, 'AdminAddProduct'])->name('admin_add_product');
    // добавление в БД
    Route::post('/add', [\App\Http\Controllers\AdminProductController::class, 'AdminAddNewProduct'])->name('admin_create_product');
    // удаления продуктов
    Route::delete('/add{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminDeleteProduct'])->name('admin_delete_product');
    // изменение продукта шаблон
    Route::post('/add{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminUpdateProduct'])->name('admin_update_product');
    //  изменение
    Route::post('/add/{id}', [\App\Http\Controllers\AdminProductController::class, 'AdminEditProduct'])->name('admin_edit_product');
});
// редирект на главную страницу
Route::get('/', function () {
    return redirect()->route('shop_home');
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

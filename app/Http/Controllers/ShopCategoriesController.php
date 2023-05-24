<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopCategoriesController extends Controller
{
    public function Categories($id){
        // для шапки профиля
        $categories = Category::all();
        // категория для вывода по id
        $category = Category::findOrFail($id);
        // выводим из категории продукты
        $prod= $category->products;
        // вывод продуктов
        $products = Product::all();
        // вывод в карзине товаров
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        // cделаем подсчет общей суммы
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
        }
        // получаем сумму позиций
        $quant = $carts->sum('quantety');
        return view('shop_doors/categories/index', compact('products', 'carts', 'total', 'quant', 'category','prod', 'categories'));
    }
    // поиск по продуктам 
    public function CategoriesSearch(Request $request){

        // для шапки профиля
        $categories = Category::all();
        // вывод продуктов
        $products = Product::all();
        // вывод в карзине товаров
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        // cделаем подсчет общей суммы
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
        }
        // получаем сумму позиций
        $quant = $carts->sum('quantety');



        // обозначим наше поисковое поле, чтобы читать данные оттуда
        $query = $request->input('search');
        // произоведем поиск
        $search = Product::where('name', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->get();
        return view('shop_doors/categories/search', compact('search', 'products', 'carts', 'total', 'quant', 'categories'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopCartController extends Controller
{
       //  фун для основной страницы
       public function Cart(){
        $categories = Category::all();
        // вывод продуктов
        $products = Product::inRandomOrder()->get();
        // вывод в карзине товаров
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        // cделаем подсчет общей суммы
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
        }
        // получаем сумму позиций
        $quant = $carts->sum('quantety');
        return view('shop_doors/cart' , compact('products', 'carts', 'total', 'quant', 'categories'));
    }
}

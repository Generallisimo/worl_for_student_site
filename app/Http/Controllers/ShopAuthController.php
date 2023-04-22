<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopAuthController extends Controller
{
    public function Auth (){
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
        return view('shop_doors/auth/index', compact('quant', 'carts', 'products', 'total'));
    }
}

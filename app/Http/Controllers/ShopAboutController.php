<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopAboutController extends Controller
{
    public function About(){
        $products = Product::all();
        $categories = Category::all();
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
        }
        $quant = $carts->sum('quantety');
        return view('shop_doors/about', compact('products', 'carts', 'total', 'quant', 'categories'));
    }
}

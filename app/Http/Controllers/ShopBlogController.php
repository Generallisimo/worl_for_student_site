<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopBlogController extends Controller
{
    public function Blog(){
                // вывод продуктов
                $products = Product::all();
                $categories = Category::all();
                // вывод в карзине товаров
                $carts = Cart::with('product')->where('user_id', auth()->id())->get();
                // cделаем подсчет общей суммы
                $total = 0;
                foreach($carts as $cart){
                    $total +=  $cart->quantety * $cart->product->price;
                }
                // получаем сумму позиций
                $quant = $carts->sum('quantety');
                return view('shop_doors/blog/index', compact('products', 'carts', 'total', 'quant', 'categories'));
        
    }
    public function BlogViewOne(){
                // вывод продуктов
                $products = Product::all();
                $categories = Category::all();
                // вывод в карзине товаров
                $carts = Cart::with('product')->where('user_id', auth()->id())->get();
                // cделаем подсчет общей суммы
                $total = 0;
                foreach($carts as $cart){
                    $total +=  $cart->quantety * $cart->product->price;
                }
                // получаем сумму позиций
                $quant = $carts->sum('quantety');
                return view('shop_doors/blog/view_one', compact('products', 'carts', 'total', 'quant', 'categories'));
        
    }
    public function BlogViewTwo(){
                // вывод продуктов
                $products = Product::all();
                $categories = Category::all();
                // вывод в карзине товаров
                $carts = Cart::with('product')->where('user_id', auth()->id())->get();
                // cделаем подсчет общей суммы
                $total = 0;
                foreach($carts as $cart){
                    $total +=  $cart->quantety * $cart->product->price;
                }
                // получаем сумму позиций
                $quant = $carts->sum('quantety');
                return view('shop_doors/blog/view_two', compact('products', 'carts', 'total', 'quant', 'categories'));
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopViewController extends Controller
{
    public function ShopView($id){
        $categories = Category::all();
        // вывод продуктов
        $products = Product::findOrFail($id);
        $prod = Product::inRandomOrder()->limit(4)->get();
        // вывод в карзине товаров
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        // cделаем подсчет общей суммы
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
        }
        // получаем сумму позиций
        $quant = $carts->sum('quantety');

        return view('shop_doors/categories/product_view' , compact('products', 'carts', 'total', 'quant', 'categories', 'prod'));
    }
    public function ShopViewAdd(Request $request, $id){
        $user_id = auth()->id();
        // создаем переменную которая будет хранить в себе данные чтобы сделать проверку
        $cart = Cart::where([
            'user_id' => $user_id,
            'product_id' => $request->product_id,
        ])->first();
        // создаем проверку чтобы товары не добавлялись новые каждый раз
        if($cart){
            $cart->quantety += $request->quantety;
            
            $cart->save();
        }else{
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $request->product_id,
                'quantety' => $request->quantety,
            ]);
        };
        $products = Product::findOrFail($id);
        return redirect()->route('shop_view', ['product_id'=>$products]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //  фун для основной страницы
    public function ShopHome(){
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
        return view('shop_doors/index', compact('products', 'carts', 'total', 'quant'));
    }
    // фун для добавления в корзину
    public function ShopAddCart(Request $request){
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
        }
        return redirect()->back();
        
    }
    // фун для обнавления количества
    public function ShopUpdateCart(Request $request, $carts){
        $cart = Cart::findOrFail($carts);
        $cart->update([
            'quantety'=>$request->quantety,
        ]);
        return redirect()->back();
    }
    // фун для удаления 
    public function ShopDeleteCart($carts){
        $cart = Cart::findOrFail($carts);
        $cart->delete();

        return redirect()->back();
    }
}

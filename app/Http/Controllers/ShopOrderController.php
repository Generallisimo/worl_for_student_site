<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class ShopOrderController extends Controller
{
    public function OrderShow(){

    }
    public function OrderBuy(Request $request){
        
        $userID = auth()->id();
        $carts = Cart::with('product')->where('user_id', $userID)->get();
        // dd($carts);
        // cделаем подсчет общей суммы
        $total = 0;
        foreach($carts as $cart){
            $total +=  $cart->quantety * $cart->product->price;
            $c = $cart->product_id;
        }
        // получаем сумму позиций
        $quant = $carts->sum('quantety');

        $order = new Order;
        $order->user_id = $userID;
        $order->product_id = $c;
        $order->quantity = $quant;
        $order->summa = $total;
        $order->save();

        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect()->route('account');

    }
}

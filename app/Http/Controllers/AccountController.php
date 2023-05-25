<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function Account(){
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
        // // вывод пользователя
        $user = auth()->user();

        $userID = auth()->id();
        $order = Order::where('user_id', $userID)->get();
        // dd($order);
        // $chat = Chat::all();
        return view('shop_doors/account/index', compact('products', 'carts', 'total', 'quant', 'categories', 'user', 'order'));
    }

    public function Chat(Request $request){
        $userID = auth()->id();
        $chatID = Chat::where('user_id', $userID)->value('id');
        
        if(!$chatID){
            $chatID = Chat::create([
                'user_id' => $userID,
            ]);
            // $chatID = $chat->id;
        }
        // dd($chatID);
        $message = new Message();
        // для обозначния id идентификатора
        $message->chat_id = $chatID;
        $message->user_role = $userID;
        $message->message = $request->input('message');
        $message->save();

        return redirect()->back();
    }
    public function ChatView(){
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
        // // вывод пользователя
        $user = auth()->user();
        // получаем id юзера
        $id = auth()->id();
        // получаем id чата по id юзера
        $chatID = Chat::where('user_id', $id)->value('id');
        // получаем сообщения по id чату
        $messages = Message::where('chat_id', $chatID)->get();
        return view('shop_doors/account/view', compact('chatID','messages', 'products', 'carts', 'total', 'quant', 'categories', 'user'));
    }
}

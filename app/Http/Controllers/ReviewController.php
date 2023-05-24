<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    
    public function Review(Request $request, $product_id){
        // if(!Auth::check()){}
        // создаем новый комментарий
        $review = new Review();
        // проверяем пользователя на id
        $review->user_id = Auth::id();
        // выводим продукт 
        $review->product_id = $product_id;
        // добавляем запрос на поле 
        $review->comment = $request->input('review_add');
        // dd($request);
        $review->save();
        return redirect()->back();
    }
}

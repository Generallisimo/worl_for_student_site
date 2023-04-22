<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // создаем список для потомков который будет разрешать использовать наши переменный в контроллер
    protected $fillable = ['product_id', 'user_id', 'quantety'];
    // создаем модель корзины и делаем связь
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

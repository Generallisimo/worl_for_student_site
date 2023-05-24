<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    // вывод столбцов которые можно массово заполнять
    protected $fillable = ['user_id', 'protected_id', 'comment'];
    // делаем связь с таблицей юзеров
    public function user(){
        return $this->belongsTo(User::class);
    }
    // делаем связь с таблицей продуктов
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

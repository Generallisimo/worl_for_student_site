<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // мы создаем модели и добавляем к ним связь между таблицами продукты и категории
    public function products(){
        // здесь связь одна ко многим
        return $this->hasMany(Product::class);
    }
}

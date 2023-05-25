<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'validate_id', 'summa', 'quantity'];
    
    public function validates(){
        return $this->belongsTo(Validate::class, 'validate_id');
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

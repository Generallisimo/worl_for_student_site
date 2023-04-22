<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // создали контроллер для вывода на страницу различных функций
    public function Admin(){

        // счетчик кол-ва продуктов
        $count =  Product::count();
        // вывод страницы
        return view('admin_panel/index', compact('count'));
    }
}

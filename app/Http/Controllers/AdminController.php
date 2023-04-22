<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // создали контроллер для вывода на страницу различных функций
    public function Admin(){

        // вывод страницы
        return view('admin_panel/index');
    }
}

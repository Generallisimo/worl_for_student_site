<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Validate;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function AdminOrder(){
        $order = Order::all();
        $valid = Validate::all();
        return view('admin_panel/order', compact('order', 'valid'));
    }
    public function AdminOrderStatus(Request $request ,$id){
        $order = Order::findOrFail($id);
        $order->update([
            'validate_id'=>$request->status,
        ]);

        // dd();
        return redirect()->back();
    }
}

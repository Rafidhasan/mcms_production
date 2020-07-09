<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\UserOrder;

class UserOrderController extends Controller
{
    public function store(Request $request, $user_id) {
        $userOrder = new UserOrder();


        $file = $request->file('product_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/orderImage/', $filename);
        $userOrder->product_image=$filename;

        $userOrder->quantity = $request->input('quantity');
        $userOrder->user_id = $user_id;


        $userOrder->save();
        return redirect('/');
    }
}

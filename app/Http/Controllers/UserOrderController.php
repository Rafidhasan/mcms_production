<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\UserOrder;

class UserOrderController extends Controller
{
    public function store(Request $request, $user_id) {
        $userOrder = new UserOrder();
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'phone_no' => 'required|min:10|numeric',
            'address' => 'required',
            'link' => 'required',
            'quantity' => 'required',
            'product_image' => 'required'
        ]);
        $file = $request->file('product_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/orderImage/', $filename);
        $userOrder->product_image=$filename;

        $userOrder->quantity = $request->input('quantity');
        $userOrder->user_id = $user_id;


        $userOrder->save();
        return redirect('/')->with('status', 'আপনার অর্ডারটি আমরা পেয়েছি');
    }
}

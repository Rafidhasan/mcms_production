<?php

namespace App\Http\Controllers;

use App\GuestOrder;
use Illuminate\Http\Request;

class GuestOrderController extends Controller
{
    public function store(Request $request)
    {
        $guestOrder = new GuestOrder();
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'phone_no' => 'required|min:10|numeric',
            'address' => 'required',
            'link' => 'required',
            'quantity' => 'required'
        ]);

        $guestOrder->name = $request->input('name');
        $guestOrder->phone_no = $request->input('phone_no');
        $guestOrder->address = $request->input('address');
        $guestOrder->link = $request->input('link');
        $guestOrder->quantity = $request->input('quantity');

        $file = $request->file('product_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/orderImage/', $filename);
        $guestOrder->product_image = $filename;


        $guestOrder->save();
        return redirect('/')->with('status', 'আপনার অর্ডারটি আমরা পেয়েছি');
    }
}

<?php

namespace App\Http\Controllers;

use DB;
use App\User;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index() {
        return view('profiles.show');
    }


    public function update($id) {
        $userInfo = User::find($id);

        $userInfo->name = request('name');
        $userInfo->email = request('email');
        $userInfo->password = request('password');
        $userInfo->phone_no = request('phone_no');
        $userInfo->address = request('address');
        $userInfo->link = request('link');

        $userInfo->save();

        return redirect('/');
    }
}

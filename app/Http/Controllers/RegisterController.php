<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('content.register');
    }
	public function postRegister(Request $req)
	{
        $user = new User();
        $user->email = $req->email;
        $user->full_name = $req->full_name;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);
        $user->role_id = 1;
        $user->save();
        return redirect()->back()->with('thongbao','Đăng ký thành công!');
    }
}

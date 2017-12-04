<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function loginAdmin()
    {
    	return view('admin.login_admin');
    }
    public function login(Request $request)
    {
     
    	$this->validate($request,
    		[
    			'email'=>'required',
    			'password'=>'required'
    		],
    		[
    			'email.required'=>'Vui lòng nhập email.',
    			'password.required'=>'Vui lòng nhập mật khẩu'
    		]
    	);
    	$cre = array('email' => $request->email,'password' => $request->password);
    	if(Auth::attempt($cre))
    		{
    			return redirect()->route('list_product');
    		}else
    		{
    			 return redirect()->back()->with('message','Đăng nhập thành công!');
    		}
    	
    }
}

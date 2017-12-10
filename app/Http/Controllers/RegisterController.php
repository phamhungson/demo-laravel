<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Product;
class RegisterController extends Controller
{   
    public function __construct()
    {
        $men_type = Product::where('gender','nam')->get();
        $women_type = Product::where('gender','nu')->get();
        $category = Category::all();
        $manafacture = Manafacture::all();
        view()->share(['men_type' => $men_type,'women_type'=> $women_type,'category' => $category,'manafacture' => $manafacture]);
    }
    public function register()
    {
        return view('content.register');
    }
	public function postRegister(Request $req)
	{
        $this->validate($req,
            [
                'email'=>'required|unique:users|min:10|max:30',
                'full_name'=>'required|min:6|max:30',
                'phone'=>'required|min:6|max:30',
                'address'=>'required|min:6|max:30',
                'password'=>'required|min:3|max:30',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'email.unique'=>'Email đẫ được sử dụng',
                'email.min'=>'Email tối thiểu 6 ký tự',
                'email.max'=>'Email tối đa 30 ký tự',
                'full_name.required'=>'Vui lòng nhập họ tên',
                'full_name.min'=>'Họ tên tối thiểu 6 ký tự',
                'full_name.max'=>'Họ tên tối đa 30 ký tự',
                'address.required'=>'Vui lòng nhập địa chỉ',
                'address.min'=>'Địa chỉ tối thiểu 6 ký tự',
                'address.max'=>'Địa chỉ tối đa 30 ký tự',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'phone.min'=>'Số điện thoại tối thiểu 6 ký tự',
                'phone.max'=>'Số điện thoại tối đa 30 ký tự',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu tối thiểu 3 ký tự',
                'password.max'=>'Mật khẩu tối đa 30 ký tự',
                're_password.same'=>'Mật khẩu không trùng khớp'
            ]);
        $user = new User();
        $user->email = $req->email;
        $user->full_name = $req->full_name;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);
        $user->role_id = 0;
        $user->save();
        return redirect()->back()->with('notice','Đăng ký thành công!');
    }
}

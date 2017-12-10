<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
class LoginController extends Controller
{
     public function __construct()
    {
        $men_type = Product::where('gender','nam')->get();
        $women_type = Product::where('gender','nu')->get();
        $category = Category::all();
        $manafacture = Manafacture::all();
        view()->share(['men_type' => $men_type,'women_type'=> $women_type,'category' => $category,'manafacture' => $manafacture]);
    }
    public function login(){
        return view('content.login');
    }
    public function postLogin(Request $req){
         $this->validate($req,
            [
             'email' => 'required|email', 
             'password' => 'required|min:3|max:15'
                
            ],
            [
                'email.required' => 'Vui lòng nhập email !',
                'email.email' => 'Email không đúng định dạng !',
                'password.required' => 'Vui lòng nhập mật khẩu !',
                'password.min' => 'Mật khẩu ít nhất 3 ký tự !',
                'password.max' => 'Mạt khẩu nhiều nhất 15 ký tự !',
            ]
        );
        $cre = array('email'=>$req->email,'password'=>$req->password);
        
        if(Auth::attempt($cre)){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('notice','Đăng nhập không thành công!');
        }     
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}

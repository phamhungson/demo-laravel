<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class MyController extends Controller
{
    public function getAdmin(){
    	return view('adminLayout.masterLayout');
    }
    public function danhsachsanpham(){
    $sanpham = Product::with('Category')->get();
    return view('product.danhsach',['sanpham'=>$sanpham]);
}
   public function themsanpham(){
  


    return view('product.them');
   }
}

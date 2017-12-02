<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Hash;
use Auth;
class PagesController extends Controller
{
    public function getHome(){
    	return view('content.index');
    }

    public function getLogin(){
    	return view('content.login');
    }

    public function getProduct(){
    	return view('content.product');
    }

    public function getProductType(){
    	return view('content.product_type');
    }

    public function getRegister(){
    	return view('content.register');
    }

    public function getAbout(){
    	return view('content.about');
    }

    public function getCheckOut(){
    	return view('content.checkout');
    }
   
    public function get404(){
        return view('content.404');
    }
    public function getContact(){
        return view('content.contact');
    }
    
    
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Hash;
use Auth;
use App\Product;
use Category;
use Manafacture;
use Order;

use OrderDetail;
class PagesController extends Controller
{   
  //   public function __construct(){
  //     $men_type = Product::where('gender','nam')->get();
  //       $women_type = Product::where('gender','nu')->get();
  //     view()->share(['men_type'=>$men_type,'women_type'=>$women_type]);
  // }
    public function getHome(){
        $new_product = Product::find(1)->orderBy('id','desc')->paginate(3);
        $most_views_product = Product::find(1)->orderBy('view','desc')->paginate(3);
        $men_type = Product::where('gender','nam')->get();
        $women_type = Product::where('gender','nu')->get();
    	return view('content.index',compact('new_product','most_views_product','men_type','women_type'));
    }

    public function getProductTypeGenderMen(){
        $product = Product::where('gender','nam')->paginate(4);
    	return view('content.product_type',compact('product'));
    }
     public function getProductTypeGenderWomen(){
        $product = Product::where('gender','nu')->paginate(4);
        return view('content.product_type',compact('product'));
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


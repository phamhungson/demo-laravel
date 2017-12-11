<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use Auth;
use App\Product;
use App\Category;
use App\Manafacture;
use App\Order;
use Cart;

use OrderDetail;
class PagesController extends Controller
{   
    public function __construct()
    {
        $men_type = Product::where('gender','nam')->get();
        $women_type = Product::where('gender','nu')->get();
        $category = Category::all();
        $manafacture = Manafacture::all();
        view()->share(['men_type' => $men_type,'women_type'=> $women_type,'category' => $category,'manafacture' => $manafacture]);
    }
    public function getHome()
    {
        $new_product = Product::find(1)->orderBy('id','desc')->paginate(3);
        $most_views_product = Product::find(1)->orderBy('view','desc')->paginate(3);
        $men_type = Product::where('gender','nam')->get();
        $women_type = Product::where('gender','nu')->get();
    	return view('content.index',compact('new_product','most_views_product','men_type','women_type'));
    }

    public function getProductTypeGenderMen()
    {
        $product = Product::where('gender','nam')->paginate(4);
        $manafacture = Manafacture::all();
        $category = Category::all();
    	return view('content.product_type',compact('product','category','manafacture'));
    }
     public function getProductTypeGenderWomen()
    {
        $product = Product::where('gender','nu')->paginate(4);
        $manafacture = Manafacture::all();
        $category = Category::all();
        return view('content.product_type',compact('product','category','manafacture'));
    }
    public function getProduct($id)
    {
        $product = Product::find($id);
        $rel_product = Product::where('product_catalog_id',$product->product_catalog_id)->paginate(4);
        return view('content.product',compact('product','rel_product'));
    }
    public function getProductType($id)
    {
        $product = Product::where('product_catalog_id',$id)->get();
        return view('content.product_type',compact('product'));
    }
    public function getAbout(){
    	return view('content.about');
    }
    //Shopping Cart
    public function addCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id'=>$id, 'name'=>$product->name,'qty'=>1, 'price'=>$product->unit_price,'options'=>['image'=>$product->image,'catalog'=>$product->category->name,'manafacture'=>$product->manafacture->name,'size'=>$product->size]]);
        $content = Cart::content();
        return redirect()->route('cart');
    }
    public function getCart(){
        $cart = Cart::content();
    	return view('content.cart',compact('cart'));
    }
    public function removeCart($id){
        Cart::remove($id);
        return redirect()->route('cart');
    }
    public function destroyCart(){
        Cart::destroy();
        return redirect()->back();
    }
    public function minusQtyCart($id){
        $car = Cart::get($id);
        $car->qty -= 1;
        Cart::update($id,$car->qty);
        return redirect()->back();
    }
    public function addQtyCart($id){
        $car = Cart::get($id);
        $car->qty += 1;
        Cart::update($id,$car->qty);
        return redirect()->back();
    }
    public function get404(){
        return view('content.404');
    }
    public function getContact(){
        return view('content.contact');
    }
    public function order(){
        return view('content.order');
    }
    
    public function search(Request $request)
    {
        $product = Product::where('name','like','%'.$request->key.'%')->get();
        return view('content.search',compact('product'));
    }
    
}


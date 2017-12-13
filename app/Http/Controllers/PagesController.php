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
use App\OrderDetail;
use App\Comment;
use Cart;
use App\Ship;

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
        $comments = Comment::all();
        $rel_product = Product::where('product_catalog_id',$product->product_catalog_id)->paginate(4);
        return view('content.product',compact('product','rel_product','comments'));
    }
    public function getProductType($id)
    {
        $product = Product::where('product_catalog_id',$id)->get();
        return view('content.product_type',compact('product'));
    }
    public function getAbout(){
    	return view('content.about');
    }
    ////Shopping Cart
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
    // ///Order
    public function getOrder(){
        $cart = Cart::content();
        return view('content.order',['cart'=>$cart]);
    }
    public function checkout(Request $request){
        $content = Cart::content();
        $this->validate($request,
            [
                'name'=>'required|min:6|max:30',
                'phone'=>'required|min:6|max:30',
                'note'=>'required|min:6|max:30',
                'address'=>'required|min:6|max:30',
            ],
            [
                'name.required'=>'Vui lòng nhập tên',
                'name.min'=>'Tên tối thiểu 6 ký tự',
                'name.max'=>'Tên tối đa 30 ký tự',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'phone.min'=>'Số điện thoại tối thiểu 6 ký tự',
                'phone.max'=>'Số điện thoại tối đa 30 ký tự',
                'note.min'=>'Ghi chú tối thiểu 6 ký tự',
                'note.max'=>'Ghi chú tối đa 30 ký tự',
                'address.required'=>'Vui lòng nhập địa chỉ giao hàng',
                'address.min'=>'Địa chỉ tối thiểu 6 ký tự',
                'address.max'=>'Địa chỉ tối đa 30 ký tự',
            ]);
        if(Auth::check())
            {
                $order = new Order();
                $order->user_id = Auth::User()->id;
                $order->date_order = Date('Y-m-d');
                $order->total = (float)Cart::Subtotal()*1000;
                $order->payment = $request->payment;
                $order->save();
                foreach($content as $item)
                {
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order->id;
                    $order_detail->product_id = $item->id;
                    $order_detail->quantity = $item->qty;
                    $order_detail->price = ($item->price)*($item->qty);
                    $order_detail->save();
                }

                $ship = new Ship();
                $ship->order_id = $order->id;
                $ship->name = $request->name;
                $ship->phone = $request->phone;
                $ship->address = $request->address;
                $ship->note = $request->note;
                $ship->save();
            }
            else
            {
                return redirect()->route('login');
            }
            Cart::destroy();
            return redirect()->back()->with('message','Gửi đơn hàng thành công!');
    }
     /// Info User
    public function info()
    {   
        $id = Auth::user()->id;
        $order_info = Order::where('user_id',$id)->get();
        return view('content.info',['order_info'=>$order_info]);
    }
    public function order_detail($id)
    {
        $order_detail = OrderDetail::where('order_id',$id)->get();
        return view('content.order_detail',['order_detail'=>$order_detail]);
    }

    public function updateInfo()
    {
        return view('content.update_info');
    }
    public function postUpdateInfo(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request,
            [
                'email'=>'required|unique:users|min:10|max:30',
                'full_name'=>'required|min:6|max:30',
                'phone'=>'required|min:6|max:30',
                'address'=>'required|min:6|max:30',
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
            ]);
        $user = User::find($id);
        $user->email = $request->email;
        $user->full_name = $request->full_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->update();
        return redirect()->route('update_info')->with('message','Đã cập nhập thông tin cá nhân !');

    }
    public function comment(Request $request)
    {
        $this->validate($request,
            [
                'comment'=>'required|min:3',
            ],
            [
                'comment.required'=>'Vui lòng nhập bình luận',
                'comment.min'=>'Bình luận tối thiểu 3 ký tự'
            ]);
        if(Auth::check())
        {
            $comment = new Comment();
            $comment->user_id = Auth::user()->id;
            $comment->product_id = $request->product_id;
            $comment->content = $request->comment;
            $comment->save();
        }
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


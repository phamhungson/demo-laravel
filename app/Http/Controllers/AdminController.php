<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manafacture;
use App\Product;
use App\Category;
class AdminController extends Controller
{
	/// Thêm hãng và hiển thị hãng sản phẩm
    public function addManafacture()
    {
    	return view('admin.add_manafacture');
    }
    public function postAddManafacture(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:1|max:20',
    			'country'=>'required|min:3|max:20',
    			'description'=>'required|min:6'
    		],
    		[
    			'name.required'=>'Vui lòng nhập tên hãng',
    			'name.min'=>'Tên hãng tối thiểu 1 ký tự',
    			'name.max'=>'Tên hãng tối đa 20 ký tự',
    			'country.required'=>'Vui lòng nhập tên quốc gia',
    			'country.min'=>'Tên quốc gia tối thiểu 3 ký tự',
    			'country.max'=>'Tên quốc gia tối đa 20 ký tự',
    			'description.required'=>'Vui lòng nhập mô tả',
    			'description.min'=>'Mô tả tối thiểu 6 ký tự'
    		]
    	);
    	$man = new Manafacture();
    	$man->name = $request->name;
    	$man->country= $request->country;
    	$man->description = $request->description;
    	$man->save();
    	return redirect()->back()->with('message','Thêm thành công hãng.');
    }
    public function listManafacture(){
    	$man = Manafacture::all();
    	return view('admin.list_manafacture',compact('man'));
    }
    /// Thêm và hiển thị sản phẩm
    public function listProduct()
    {
    	$product = Product::all();
    	return view('admin.list_product',compact('product'));
    }
    public function addProduct()
    {
    	$man = Manafacture::all();
    	$cat = Category::all();
    	return view('admin.add_product',compact('man','cat'));
    }
    public function postAddProduct(Request $request)
    {
    	$this->validate($request,
    		[
    			'product_name'=>'required',
    			'manafacture_id'=>'required',
    			'size'=>'required',
    			'gender'=>'required',
    			'unit_price'=>'required',
    			'description'=>'required',
    			'image'=>'required',
    		],
    		[
    			'name.required'=>'Vui lòng nhập tên sản phẩm',
    			'size.required'=>'Vui lòng nhập size sản phẩm',
    			'unit_price.required'=>'Vui lòng chọn giá sản phẩm',
    			'image.required'=>'Vui lòng chọn hình ảnh sản phẩm',
    			'description.required'=>'Vui lòng nhập mô tả cho sản phẩm'
    		]
    	);
    	$product = new Product();
    	$product->product_name = $request->product_name;
    	$product->manafacture_id = $request->manafacture_id;
    	$product->size = $request->size;
    	$product->gender = $request->gender;
    	$product->product_catalog_id = $request->product_catalog_id;
    	$product->unit_price = $request ->unit_price;
    	$product->description = $request->description;
    	$file = $request->file('image');
    	$file->move('image/product',$file->getClientOriginalName());
    	$product->image = $file->getClientOriginalName();
    	$product->save();
    	return redirect()->back()->with('message','Thêm sản phẩm thành công.');

    }
    /// Thêm và hiển thị thể loại sản phẩm
    public function listCategory()
    {
    	$cat = Category::all();
    	return view('admin.list_category',compact('cat'));
    }
    public function addCategory()
    {
    	return view('admin.add_category');
    }
    public function postAddCategory(Request $request)
    {
    	$this($request,
    		[
    			'name'=>'required|min:1|max:20',
    			'description'=>'required|min:6',
    		],
    		[
    			'name.required'=>'Vui lòng nhập tên thể loại.',
    			'name.min'=>'Tên thể loại tối thiểu 1 ký tự.',
    			'name.max'=>'Tên thể loại tối đa 20 ký tự.',
    			'description.required'=>'Vui lòng nhập mô tả.',
    			'description.min'=>'Mô tả tối thiểu 6 ký tự.'
    		]
    	);
    	$cat = new Category();
    	$cat->name = $request->name;
    	$cat->description = $request->description;
    	$cat ->save();
    	return redirect()->back()->with('message','Thêm thể loại thành công.'); 
    }	
}

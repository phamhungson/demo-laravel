@extends('content/master')
@section('main')
<div class="container">
	<div class="check">	 
		<div class="col-md-9 cart-items">
			
			@foreach($cart as $item)
			@if($item->rowId != NULL)
			 <!-- <h1>{{$item->name}}</h1> -->
			 <div class="cart-header">
				 <a href="removeCart/{{$item->rowId}}"><div class="close1"> </div></a>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="image/product/{{$item->options->image}}" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3>{{$item->name}}<span>Hãng: {{$item->options->manafacture}}</span><span>Thể loại: {{$item->options->catalog}}</span></h3>
						<ul class="qty">
							<li><p>Size : {{$item->options->size}}</p></li>
							<li><p>Số lượng : {{$item->qty}}</p></li>
							<li>
								<div class="btn-group mr-2" role="group" aria-label="First group">
								<a href="addQtyCart/{{$item->rowId}}"><button type="button" class="btn btn-secondary">+</button></a>
    							<a href="minusQtyCart/{{$item->rowId}}"><button type="button" class="btn btn-secondary">-</button></a>
    							</div>
    						</li>
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						</ul>
						<div class="delivery">
							 <p>Giá : ${{$item->price}}</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>							
				  </div>
			 </div>
			 @else
			 <h1>Giỏ hàng trống !</h1>
			 @endif	
			 @endforeach
			
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Đặt hàng</a>
			 <div class="price-details">
				 <h3>Chi tiết giá</h3>
				 <span>Tổng tiền</span>
				 <span class="total1">${{Cart::Subtotal()}}</span>
				 <span>Giảm giá:</span>
				 <span class="total1">0.0%</span>
				 <span>Phí vận chuyển</span>
				 <span class="total1">$150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>${{Cart::Subtotal()}}</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="{{route('order')}}">Đặt hàng</a>
			</div>
	 </div>
</div>
@endsection
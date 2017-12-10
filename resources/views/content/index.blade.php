@extends('content/master')
@section('main')
<div class="banner">
		<div class="container">
			<div class="banner_desc">
				<h1>New Season Arrivals.</h1>
				<h2>Check out all the new trends</h2>
				<div class="button">
				      <a href="#" class="hvr-shutter-out-horizontal">Shop Now</a>
				    </div>
			</div>
		</div>
	</div>	
	<div class="content_top">
		<h3 class="m_1">Sản phẩm mới nhất</h3>
		<div class="container">
		   <div class="box_1">
		       <div class="col-md-7">
				    <div class="section group">
				    	@foreach($new_product as $product)
							<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
								<div class="shop-holder">
			                         <div class="product-img">
			                            <a href="{{route('product')}}">
			                                <img width="225" height="265" src="image/product/{{$product->image}}" class="img-responsive"  alt="item4">		                            </a>
			                            <a href="" class="button item_add"></a>		                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
			                            <div><a href="{{route('product')}}" rel="tag">{{$product->name}}</a></div>
			                            <h3><a href="{{route('product')}}">{{$product->category->name}}</a></h3>
			                            <span class="amount item_price">${{$product->unit_price}}</span>
			                    </div>
							</div>
							@endforeach
							<div class="clearfix"></div> 
					</div>
			</div>
			<div class="col-md-5 row_3">
				<div class="about-block-content">
			       <div class="border-add"></div>
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae quam voluptatibus deleniti ipsa consequatur!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					<p>		        	</p></div>
					<img src="source/images/pic9.jpg" class="img-responsive" alt=""/>
		    </div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	<div class="content_top">
		<h3 class="m_1">Sản phẩm HOT</h3>
		<div class="container">
		   <div class="box_1">
		       
			<div class="col-md-5 row_3">
				<div class="about-block-content">
			       <div class="border-add"></div>
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae quam voluptatibus deleniti ipsa consequatur!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					<p>		        	</p></div>
					<img src="source/images/pic9.jpg" class="img-responsive" alt=""/>
		    </div>
		    <div class="col-md-7">
				    <div class="section group">
							<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
								<div class="shop-holder">
			                         <div class="product-img">
			                            <a href="{{route('product')}}">
			                                <img width="225" height="265" src="source/images/pic3.jpg" class="img-responsive"  alt="item4">		                            </a>
			                           <a href="" class="button item_add"></a>	                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
			                            <div><a href="{{route('product')}}" rel="tag">humour</a></div>
			                            <h3><a href="{{route('product')}}">Non-charac</a></h3>
			                            <span class="amount item_price">$45.00</span>
			                    </div>
							</div>
							<div class="clearfix"></div> 
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	<div class="content_top">
		<h3 class="m_1">Sản phẩm bán chạy nhất</h3>
		<div class="container">
		   <div class="box_1">
		       <div class="col-md-7">
				    <div class="section group">
					
							<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
								<div class="shop-holder">
			                         <div class="product-img">
			                            <a href="{{route('product')}}">
			                                <img width="225" height="265" src="source/images/pic3.jpg" class="img-responsive"  alt="item4">		                            </a>
			                           <a href="" class="button item_add"></a>	                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
			                            <div><a href="{{route('product')}}" rel="tag">humour</a></div>
			                            <h3><a href="{{route('product')}}">Non-charac</a></h3>
			                            <span class="amount item_price">$45.00</span>
			                    </div>
							</div>
							<div class="clearfix"></div> 
					</div>
			</div>
			<div class="col-md-5 row_3">
				<div class="about-block-content">
			       <div class="border-add"></div>
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati beatae quam voluptatibus deleniti ipsa consequatur!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					<p>		        	</p></div>
					<img src="source/images/pic9.jpg" class="img-responsive" alt=""/>
		    </div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	@endsection
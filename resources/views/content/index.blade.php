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
			                            <a href="product/{{$product->id}}">
			                                <img width="225" height="265" src="image/product/{{$product->image}}" class="img-responsive"  alt="item4">		                            </a>
			                            <a href="addCart/{{$product->id}}" class="button item_add"></a>		                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
			                            <div><span style="width: 5px; font-weight: 0.5px;">Lượt xem: {{$product->view}}</span></div>
			                            <h3>{{$product->name}}</h3>
			                            <span class="amount item_price">${{$product->unit_price}}</span>
			                              @if((int)$comments->where('product_id',$product->id)->avg('rate') == 5) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9733;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 4) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 3) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 2) 
									<span class="text-success"> &#9733; &#9733; &#9734; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 1) 
									<span class="text-success"> &#9733; &#9734; &#9734; &#9734; &#9734;</span>
									@endif
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
				    	@foreach($most_views_product as $product)
							<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
								<div class="shop-holder">
			                         <div class="product-img">
			                            <a href="product/{{$product->id}}">
			                                <img width="225px" height="265px" src="image/product/{{$product->image}}" class="img-responsive"  alt="item4">		                            </a>
			                           <a href="addCart/{{$product->id}}" class="button item_add"></a>	                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
			                            <div><span>Lượt view:{{$product->view}}</span></div>
			                            <h3>{{$product->name}}</h3>
			                            <span class="amount item_price">${{$product->unit_price}}</span>
			                             @if((int)$comments->where('product_id',$product->id)->avg('rate') == 5) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9733;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 4) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 3) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 2) 
									<span class="text-success"> &#9733; &#9733; &#9734; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$product->id)->avg('rate') == 1) 
									<span class="text-success"> &#9733; &#9734; &#9734; &#9734; &#9734;</span>
									@endif
			                    </div>
							</div>
							@endforeach
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
							@foreach($new_product as $pro)
							<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
								<div class="shop-holder">
			                         <div class="product-img">
			                            <a href="product/{{$pro->id}}">
			                                <img width="225" height="265" src="image/product/{{$pro->image}}" class="img-responsive"  alt="item4">		                            </a>
			                           <a href="addCart/{{$pro->id}}" class="button item_add"></a>	                         </div>
			                    </div>
			                    <div class="shop-content" style="height: 80px;">
									<div><span>Lượt view:{{$pro->view}}</span></div>			                            <h3>{{$pro->name}}</h3>
			                            <span class="amount item_price">${{$pro->unit_price}}</span>
			                            @if((int)$comments->where('product_id',$pro->id)->avg('rate') == 5) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9733;</span>
									@endif
									@if((int)$comments->where('product_id',$pro->id)->avg('rate') == 4) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$pro->id)->avg('rate') == 3) 
									<span class="text-success"> &#9733; &#9733; &#9733; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$pro->id)->avg('rate') == 2) 
									<span class="text-success"> &#9733; &#9733; &#9734; &#9734; &#9734;</span>
									@endif
									@if((int)$comments->where('product_id',$pro->id)->avg('rate') == 1) 
									<span class="text-success"> &#9733; &#9734; &#9734; &#9734; &#9734;</span>
									@endif
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
	@endsection
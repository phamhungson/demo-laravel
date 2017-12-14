<div class="header_top">
	<div class="container">
		<div class="one-fifth column row_1">
		    <ul class="footer_social">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
		   </ul>
         </div>
         <div class="cssmenu">
         	 @if(Auth::check())
			<ul>
			   <li class="active" style="margin-right: 20px;"><a href="{{route('info')}}">{{Auth::User()->full_name}}</a></li> 
			   <li class="active"><a href="{{route('logout')}}">Đăng xuất </a></li> 
			</ul>
      			@else
			<ul>
			    <li class="active" style="margin-right: 20px;"><a href="{{route('login')}}">Đăng nhập</a></li> 
			    <li class="active"><a href="{{route('register')}}">Đăng ký </a></li> 
			</ul>
			@endif
		 </div>
	</div>
</div>	
<div class="wrap-box"></div>
<div class="header_bottom men_border">
	    <div class="container">
			<div class="col-xs-8 header-bottom-left">
				<div class="col-xs-2 logo">
					<h1><a href="{{route('home')}}"><span>Buy</span>shop</a></h1>
				</div>
				<div class="col-xs-3 menu">
		            <ul class="megamenu skyblue">
				      <li class="active grid"><a class="color1" href="{{url('product_type/gender/men')}}">Men</a><div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										@foreach($men_type as $type)
										<li><a href="product_type/{{$type->product_catalog_id}}">{{$type->category->name}}</a></li>
										@endforeach
									</ul>	
								</div>							
							</div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="product_type/gender/women">Women</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										@foreach($women_type as $type)
										<li><a href="product_type/{{$type->product_catalog_id}}">{{$type->category->name}}</a></li>
										@endforeach
										
									</ul>	
								</div>							
							</div>
							
						</div>
			    </li>
				<li><a class="color4" href="{{route('about')}}">About</a></li>				
				<li><a class="color6" href="{{route('contact')}}">Hỗ trợ</a></li>
			  </ul> 
			</div>
		</div>
	    <div class="col-xs-4 header-bottom-right">
	       <div class="box_1-cart">
		     <div class="box_11"><a href="{{route('cart')}}">
		     	<!-- {{var_dump((float)Cart::Subtotal()*1000)}} -->
		      <h4><p>Cart: {{(float)Cart::Subtotal()*1000}} VND</p><img src="source/images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="{{route('destroyCart')}}" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	        </div>
	        <div class="search">
	        <form action="{{route('search')}}" method="GET" enctype="multipart/form-data">
	        		        	<input type="text" name="key" class="textbox" placeholder="Tìm kiếm">
				<input type="submit"" id="submit">

	        </form>	  
				
				<div id="response"> </div>
		     </div>
	         <div class="clearfix"></div>
       </div>
        <div class="clearfix"></div>
	 </div>
</div>
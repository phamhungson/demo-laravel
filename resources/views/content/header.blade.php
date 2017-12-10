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
			   <li class="active" style="margin-right: 20px;"><a href="{{route('home')}}">{{Auth::User()->email}}</a></li> 
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
<div class="header_bottom">
	    <div class="container">
			<div class="col-xs-8 header-bottom-left">
				<div class="col-xs-2 logo">
					<h1><a href="{{route('home')}}"><span>Buy</span>shop</a></h1>
				</div>
				<div class="col-xs-6 menu">
		            <ul class="megamenu skyblue">
				      <li class="active grid"><a class="color1" href="{{route('home')}}">Men</a><div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Accessories</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></li>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="men.html">Levis</a></li>
										<li><a href="men.html">Persol</a></li>
										<li><a href="men.html">Nike</a></li>
										<li><a href="men.html">Edwin</a></li>
										<li><a href="men.html">New Balance</a></li>
										<li><a href="men.html">Jack & Jones</a></li>
										<li><a href="men.html">Paul Smith</a></li>
										<li><a href="men.html">Ray-Ban</a></li>
										<li><a href="men.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">Women</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Accessories</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></li>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="men.html">Levis</a></li>
										<li><a href="men.html">Persol</a></li>
										<li><a href="men.html">Nike</a></li>
										<li><a href="men.html">Edwin</a></li>
										<li><a href="men.html">New Balance</a></li>
										<li><a href="men.html">Jack & Jones</a></li>
										<li><a href="men.html">Paul Smith</a></li>
										<li><a href="men.html">Ray-Ban</a></li>
										<li><a href="men.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="{{route('about')}}">About</a></li>				
				<li><a class="color5" href="{{route('404')}}">Blog</a></li>
				<li><a class="color6" href="contact.html">Hỗ trợ</a></li>
			  </ul> 
			</div>
		</div>
	    <div class="col-xs-4 header-bottom-right">
	       <div class="box_1-cart">
		     <div class="box_11"><a href="checkout.html">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="source/images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	        </div>
	        <div class="search">	  
				<input type="text" name="s" class="textbox" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		     </div>
	         <div class="clearfix"></div>
       </div>
        <div class="clearfix"></div>
	 </div>
</div>
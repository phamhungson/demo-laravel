@extends('content/master')
@section('main')
<div class="single_top">
	 <div class="container"> 
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="image/product/{{$product->image}}" class="img-responsive" />
									<img class="etalage_source_image" src="image/product/{{$product->image}}" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="image/product/{{$product->image}}" class="img-responsive" />
								<img class="etalage_source_image" src="image/product/{{$product->image}}" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="image/product/{{$product->image}}" class="img-responsive"  />
								<img class="etalage_source_image" src="image/product/{{$product->image}}"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="image/product/{{$product->image}}" class="img-responsive"  />
								<img class="etalage_source_image" src="image/product/{{$product->image}}"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<ul class="back">
                	  <li><i class="back_arrow"> </i>Hãng sản xuất : {{$product->manafacture->name}}</li>
                    </ul>
					<h1>{{$product->name}}</h1>
					<p>{{$product->description}}</p>
					<p>{{$product->manafacture->description}}</p>
					<p>Xuất xứ: {{$product->manafacture->country}}</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">Chọn size</option>	
							<option value="{{$product->size}}">{{$product->size}}</option>
							
			             </select>
			            </div>
						 <div class="clearfix"></div>
			         </div>
			         <div class="simpleCart_shelfItem">
			         	<div class="price_single">
						  <div class="head"><h2><span class="amount item_price">${{$product->unit_price}}</span></h2></div>
						 
					       <div class="clearfix"></div>
					     </div>
			              
			              <div class="size_2-right"><a href="#" class="item_add item_add1 btn_5" value="" />Thêm vào giỏ hàng </a></div>
			          
			         </div>
				</div>
          	    <div class="clearfix"></div>
          	   </div>
			 <ul class="menu_drop">
				<li class="item3"><a href="#"><img src="source/images/product_arrow.png">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
   </div>


   <h3 class="m_2">SẢN PHẨM LIÊN QUAN</h3>
	     <div class="container">
          		<div class="box_3">
          			@foreach($rel_product as $pro)
          			<div class="col-md-3">
          				<div class="content_box"><a href="product/{{$pro->id}}">
			   	          <img src="image/product/{{$pro->image}}" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="product/{{$pro->id}}">{{$pro->name}}</a></h4>
				    <p>$ {{$pro->unit_price}}</p>
			        </div>
          			@endforeach
			        <div class="clearfix"> </div>
          		</div>
          	</div>
          	   
             <br>
             <textarea rows="4" cols="50" name="comment" form="usrform">
              Enter text here...</textarea>
              <form action="/action_page.php" id="usrform">
             <input type="submit" value="bình luận">
             </form>
        </div>

@endsection
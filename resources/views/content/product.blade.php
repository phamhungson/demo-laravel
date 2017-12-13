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
					<span class="text-success">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
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
						  <div class="head"><h3><span class="amount item_price">${{$product->unit_price}}</span></h3></div>
						 
					       <div class="clearfix"></div>
					     </div>
			              
			              <div class="size_2-right"><a href="addCart/{{$product->id}}" class="item_add item_add1 btn_5" value="" />Add to Cart </a></div>
			          
			         </div>
				</div>
          	    <div class="clearfix"></div>
          	   </div>
			 <ul class="menu_drop">
				<li class="" style="background-color: #FD7179"><a href="#"><img src="source/images/product_arrow.png">Reviews ({{$comments->count()}})</a>
					<ul>
						@foreach($comments as $comment)
						<li class="subitem1" style="background-color: #FFFFFF"> <p>{{$comment->user->full_name}}</p> <span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9734;</span><br>{{$comment->content}}<hr></li>
						@endforeach
					</ul>
				</li>
	 		</ul>
	 		<div>
	 			<br>
	 			<p>User</p>
	 			<h4>Đánh giá: <span class="text-success"> &#9733; &#9733; &#9733; &#9733; &#9734;</span></h4>
	 		</div>
	 		
	 		<div class="form-group">
	 		<form>
			  <label for="comment">Comment:</label>
			  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
			  <input type="hidden" name="product_id" value="{{$product->id}}">
			  <button type="submit " class="btn btn-primary" style="width: 250px; margin-top: 10px;">Primary</button>
			</form>
			</div>
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
        </div>

@endsection
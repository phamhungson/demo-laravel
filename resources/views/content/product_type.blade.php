@extends('content/master')
@section('main')
	<div class="container">
<div class="women_main">
	<div class="col-md-9 w_content">
	    <div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">
			@foreach($product as $pro)
		  <div class="grid1_of_4 simpleCart_shelfItem">
				<div class="content_box"><a href="product/{{$pro->id}}">
			   	  <div class="view view-fifth">
			   	   	 <img src="image/product/{{$pro->image}}" class="img-responsive" alt=""/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <p> {{$pro->name}}</p>
				    <h6>{{$pro->manafacture->name}}</h6>
				    <span class="text-success">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
				     <div class="size_1">
				     	<span class="item_price">${{$pro->unit_price}}</span>
				       <select class="item_Size">
						<option value="Small">{{$pro->size}}</option>	
		      		    </select>
		      		    <div class="clearfix"></div>
		      		  </div>
		      		  <div class="size_2">
			    	    <div class="size_2-right"><a href="addCart/{{$pro->id}}"><input type="button" class="item_add add3" value="" /></a></div>
			    	    <div class="clearfix"> </div>
			    	 </div>
			     </div>
			</div>
			
			@endforeach
			<div class="clearfix"></div>
		</div>
		
		<!-- end grids_of_4 -->
	</div>
	<!-- start sidebar -->
	<div class="col-md-3">
	  <div class="w_sidebar">
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								@foreach($category as $cat)
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{$cat->name}}</label>
								@endforeach	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								@foreach($manafacture as $man)
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{$man->name}}</label>
								@endforeach																		
							</div>
						</div>
		</section>
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>						
		</section>
	  </div>
   </div>
	<!-- start content -->
   <div class="clearfix"></div>
   <!-- end content -->
 </div>
</div>
@endsection
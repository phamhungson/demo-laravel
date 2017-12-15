@extends('content/master')
@section('main')
<div class="single_top">
	 <div class="container"> 
	  <div class="map">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	   </div>
	   <div class="col-md-9 contact_left">
		 	  <h1>LIÊN HỆ</h1>
			 	  	@if($errors->count() >0)
					@foreach($errors as $err)
						<div class="alert alert-danger">{{$err}}</div>
					@endforeach
					@endif
					@if(Session::has('message'))
						<div class="alert alert-success">{{Session::get('message')}}</div>
					@endif
	  			  <p>Điền thông tin để nhận hỗ trợ </p>
	  			 <form action="{{route('contact')}}" method="post" enctype="multipart/form-data">
	  			 	{{csrf_field()}}
					<div class="column_2">
                     	<input type="text" class="text" name="name" placeholder="name" style="color: #000">
					 	<input type="text" class="text" name="email" placeholder="email" style="margin-left:2.7%; color: #000;">
					 	<input type="text" class="text" name="title" placeholder="title" style="margin-left:2.7%; color: #000;">
					</div>
					<div class="column_3">
	                   <textarea value="Message" name="message" placeholder="Message" style="color: #000;"></textarea>
	                </div>
	                <div class="form-submit1">
			          <input type="submit" value="Send Message" style="color: #000;">
					</div>
					<div class="clearfix"> </div>
				  </form>
		 </div>
		 <div class="col-md-3 contact_right">
		 	<h2>THÔNG TIN</h2>
		 	<address class="address">
              <p>Đại học Bách Khoa Hà Nội, <br>số 1 Đại Cồ Việt</p>
              <dl>
                 <dt></dt>
                 <dd>Liên hệ:<span>Anh Tiệp hoặc Anh Sơn</span></dd>
                 <dd>sdt anh Sơn:<span>01676863045</span></dd>
                 <dd>sdt anh Tiệp:<span>01696608207</span></dd>
                 <dd>E-mail:&nbsp; <a href="phamsonqn97@gmail.com">phamsonqn97@gmail.com</a>
                  <br> <a href="tiepnguyenvantv97@gmail.com.com">tiepnguyenvantv97@gmail.com.com</a>                       
                 </dd>
              </dl>
           </address>
		 </div>
      </div>
</div> 
@endsection
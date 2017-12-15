@extends('content/master')
@section('main')
	<div class="single_top">
	 <div class="container"> 
	     <div class="register">
	     	<h3 style="color: #df1f26;
					font-size: 1em;
					padding-bottom: 5px;
					margin: 0;
					font-weight: 600;">THÔNG TIN CÁ NHÂN</h3>
	     	@if($errors->count())
						@foreach($errors->all() as $err)
						<h6 class="alert alert-danger">{{$err}}</h6>
						@endforeach
					@endif
					@if(Session::has('notice'))
					<h6 class="alert alert-success">
						{{Session::get('notice')}}
					</h6>
					@endif
		  	  <form action="{{route('register')}}" method="post"> 
		  	  	<input type="hidden" name="_token" value="{{csrf_token()}}">
				 <div class="register-top-grid register-but">
					
					
					 <div>
						<span>Họ tên<label>*</label></span>
						<input type="text" name="full_name"> 
					 </div>
					 <div>
						<span>Số điện thoại<label>*</label></span>
						<input type="text" name="phone"> 
					 </div>
					 <div>
						 <span>Địa chỉ Email<label>*</label></span>
						 <input type="text" name="email"> 
					 </div>
					 <div>
						 <span>Địa chỉ<label>*</label></span>
						 <input type="text" name="address"> 
					 </div>
					 <!-- <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div> -->
				     <div class="register-bottom-grid">
						    <h3>MẬT KHẨU</h3>
							 <div>
								<span>Mật khẩu<label>*</label></span>
								<input type="password" name="password" style="border: 1px solid #DDDBDB;
    outline-color: #fb4d01;
    width: 96%;
    font-size: 0.8125em;
    padding: 10px;">
							 </div>
							 <div>
								<span>Xác nhận mật khẩu<label>*</label></span>
								<input type="password" name="re_password" style="border: 1px solid #DDDBDB;
    outline-color: #fb4d01;
    width: 96%;
    font-size: 0.8125em;
    padding: 10px;">
							 </div>
							 <div class="clearfix"> </div>
					 </div>
		
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input type="submit" value="ĐĂNG KÝ">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
     </div>
</div>
@endsection
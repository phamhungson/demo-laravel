@extends('content/master')
@section('main')
	<div class="single_top">
	 <div class="container"> 
	     <div class="register">
		  	  <form action="{{route('register')}}" method="post"> 
		  	  	<input type="hidden" name="_token" value="{{csrf_token()}}">
				 <div class="register-top-grid">
					<h3>THÔNG TIN CÁ NHÂN</h3>
					@if($errors->count())
						@foreach($errors->all() as $err)
						<div class="alert alert-danger">{{$err}}</div>
						@endforeach
					@endif
					@if(Session::has('thanhcong'))
					<div class="alert alert-success">
						{{Session::get('thanhcong')}}
					</div>
					@endif
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
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>MẬT KHẨU</h3>
							 <div>
								<span>Mật khẩu<label>*</label></span>
								<input type="text" name="password">
							 </div>
							 <div>
								<span>Xác nhận mật khẩu<label>*</label></span>
								<input type="text" name="re_password">
							 </div>
							 <div class="clearfix"> </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="ĐĂNG KÝ">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
     </div>
</div>
@endsection
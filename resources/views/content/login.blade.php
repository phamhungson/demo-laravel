@extends('content/master')
@section('main')
	<div class="single_top">
	 <div class="container"> 
	    <div class="register">
			  <div class="col-md-6 login-right">
			  	<h3>ĐĂNG NHẬP</h3>
				<p>If you have an account with us, please log in.</p>
				@if(Session::has('notice'))
				<div class="alert alert-danger">{{Session::get('notice')}}</div>
				@endif
				@if($errors->count()>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}}
						@endforeach
					</div>
				@endif
				<form action="{{route('login')}}" novalidate  method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				  <div>
					<span>Email <label>*</label></span>
					<input type="text" name="email"> 
				  </div>
				  <div>
					<span>Mật khẩu<label>*</label></span>
					<input type="text" name="password"> 
				  </div>
				  <a class="forgot" href="">Forgot Your Password?</a>
				  <input type="submit" value="ĐĂNG NHẬP">
			    </form>
			   </div>
			    <div class="col-md-6 login-left">
			  	 <h3>TẠO TÀI KHOẢN</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="{{route('register')}}">Tạo tài khoản</a>
			   </div>	
			   <div class="clearfix"> </div>
		</div>
     </div>
</div>
@endsection
@extends('content/master')
@section('main')
<div class="container" >
	<h1 style="margin-top: 10px">Cập nhật thông tin cá nhân</h1>
			@if($errors->count() >0)
			@foreach($errors as $err)
				<div class="alert alert-danger">{{$err}}</div>
			@endforeach
			@endif
			@if(Session::has('message'))
				<div class="alert alert-success">{{Session::get('message')}}</div>
			@endif
	<div class="row" style="margin-bottom: 10px ;margin-top: 10px">
		<form action="{{route('update_info')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
			   <div class="form-group">
			    <label for="inputdefault">Email (*) </label>
			    <input class="form-control"  type="text" name="email" value="{{Auth::user()->email}}">
			  </div>
			   <div class="form-group">
			    <label for="inputdefault">Họ tên (*)</label>
			    <input class="form-control" id="inputdefault" type="text" name="full_name" value="{{Auth::user()->full_name}}">
			  </div>
			</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			 <div class="form-group">
			    <label for="inputdefault">Địa chỉ (*)</label>
			    <input class="form-control" id="inputdefault" type="text" name="address" value="{{Auth::user()->address}}">
			  </div>
			  <div class="form-group">
			    <label for="inputdefault">Số điện thoại (*)</label>
			    <input class="form-control" id="inputdefault" type="text" name="phone" value="{{Auth::user()->phone}}">
			  </div>
			  <button type="submit" class="btn btn-primary" style="width: 250px">Cập nhập</button>
		</div>
		
		</form>
	</div>
	</div>
@endsection
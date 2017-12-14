@extends('content/master')
@section('main')
	<div class="container">
		<div class="row" style="margin-bottom: 10px">
	 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	 	<h2>Chi tiết đơn hàng</h2>     
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>ID đơn hàng</th>
		        <th>Sản phẩm</th>
		        <th>Số lượng</th>
		        <th>Tổng tiền</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($order_detail as $order)
		      <tr>
		        <td>{{$order->order_id}}</td> 
		        <td>{{$order->product->name}}</td>
		        <td>{{$order->quantity}}</td>
		        <td>{{$order->price}}</td>
		      </tr>
		      @endforeach
		    </tbody>
		  </table>
	 </div>
  	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  		<h2>Thông tin cá nhân</h2>
  		<table class="table ">
		    <thead>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Hộ tên: </td>
		        <td>{{Auth::user()->full_name}}</td>
		        
		      </tr>
		      <tr>
		        <td>Email: </td>
		        <td>{{Auth::user()->email}}</td>
		        
		      </tr>
		      <tr>
		        <td>Phone: </td>
		        <td>{{Auth::user()->phone}}</td>
		      </tr>
		      <tr>
		        <td>Address: </td>
		        <td>{{Auth::user()->address}}</td>
		      </tr>
		    </tbody>
		  </table>
		  <a href="update_info"><button type="button" class="btn btn-success" style="width: 250px">Thay đổi thông tin</button></a>
  	</div>
  	</div>
</div>
@endsection
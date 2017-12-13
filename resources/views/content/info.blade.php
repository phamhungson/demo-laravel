@extends('content/master')
@section('main')
	<div class="container">
		<div class="row" style="margin-bottom: 10px">
	 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	 	<h2>Đơn hàng của tôi</h2>     
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Địa chỉ giao hàng</th>
		        <th>Số điện thoại</th>
		        <th>Tổng tiền</th>
		        <th>Ngày đặt hàng</th>
		        <th>Chi tiết</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($order_info as $order)
		      <tr>
		        <td>{{$order->id}}</td> 
		        <td>{{$order->ship->address}}</td>
		        <td>{{$order->ship->phone}}</td>
		        <td>{{$order->total}}</td>
		        <td>{{$order->date_order}}</td>
		        <td><a href="order_detail/{{$order->id}}">chi tiết</a></td>
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
		  <br>
  		</div>
  	</div>
</div>
@endsection
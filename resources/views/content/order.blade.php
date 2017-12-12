@extends('content/master')
@section('main')
	<div class="container">
	<div class="row">
		<form action="order" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<div class="col-xs-8 col-md-8 col-sm-8">
			<h1>Thông tin giao hàng</h1>
		<div class="form-card">
            <div class='form-group'>
                <div class='col-sm-4 form-group'>
                    <label class="control-label locked" for="name-input-field">Tên người nhận</label>
                    <input id="name" name="name" class="form-control" type="text" required="">
                </div>
            
                <div class='col-sm-4 form-group'>
                    <label class="control-label locked" for="phone-input-field">Số điện thoại</label>
                    <input id="phone_number" name="phone" type="text" placeholder="08xxxxxxxxxx" class="form-control locked" required="">
                </div>
            </div>
                    <!-- keterangan -->
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label" for="desc-input-field">Địa chỉ giao hàng</label>
                    <textarea name="address" cols="0" rows="3" class="form-control "></textarea>
                </div>
            </div>
            <!-- keterangan -->
            <div class="form-group locked">
                <div class='col-xs-12 form-group'>
                    <label class="control-label locked" for="desc-input-field">Ghi chú</label>
                    <textarea name="note" id="address" cols="0" rows="3" class="form-control locked"></textarea>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xs-4 col-md-4 col-sm-4">
        	<h1>Thanh toán</h1>
        	@foreach($cart as $item)
        	<div class="cart-header">
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="image/product/{{$item->options->image}}" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><span>Sản phẩm: {{$item->options->catalog}}</span><span>Thể loại: {{$item->options->manafacture}}</span></h3>
						<ul class="qty">
							<li><p>Số lượng : {{$item->qty}}</p></li>
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						</ul>
						<div class="delivery"> 
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>							
				  </div>
			 </div>
			 @endforeach
			 <div>
			 	<label for="sel1">Tổng: {{Cart::Subtotal()}}VNĐ</label><br>
			 </div>
			 <label for="sel1">Hình thức thanh toán:</label>
		      <select class="form-control" id="sel1" style="width: 250px" name="payment">
		        <option value="Thanh toán trực tuyến">Thanh toán trực tuyến</option>
		        <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
		      </select><br>
		      <button type="submit" class="btn btn-success" style="width: 250px; margin-bottom: 10px">THANH TOÁN</button><br>

        </div>
        </form>
	</div>
</div>
<div></div>
@endsection
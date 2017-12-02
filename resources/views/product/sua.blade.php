@extends('adminLayout/masterLayout')
@section('content')
 
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Product
<small>Add</small>
</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
<form action="#" method="POST">
{{ csrf_field() }}
<div class="form-group">
<label>Mã Sản Phẩm</label>
<input class="form-control" name="product-id" placeholder="Mã Sản Phẩm" value="" />
</div>
<div class="form-group">
<label>Tên Sản Phẩm</label>
<input class="form-control" name="product_name" placeholder="Tên Sản Phẩm" value=""/>
</div>
<div class="form-group">
<label>size</label>
<input class="form-control" name="size" placeholder="Size" value=""/>
</div>
<div class="form-group">
<label>Danh Mục</label>
<input class="form-control" name="product_category_id" placeholder="Danh Mục" value="" />
</div>
<div class="form-group">
<label>Đơn giá</label>
<input class="form-control" name="unit_price" placeholder="Đơn giá" value="" />
</div>
<div class="form-group">
<label>Giá</label>
<input class="form-control" name="promotion_price" placeholder="Giá" value="" />
</div>
<div class="form-group">
<label>ẢnhID</label>
<input class="form-control" name="image_id" placeholder="ẢnhID" value="" />
</div>
<div class="form-group">
<label>View</label>
<input class="form-control" name="promotion_price" placeholder="View" value="" />
</div>
<div class="form-group">
<label>Ngày tạo</label>
<input class="form-control" name="cteated_at" placeholder="Ngày tạo" value="" />
</div>
<div class="form-group">
<label>Ngày cập nhật</label>
<input class="form-control" name="updated_at" placeholder="Ngày cập nhật" value="" />
</div>
<button type="submit" class="btn btn-default">Sửa</button>
<button type="reset" class="btn btn-default">Làm Mới</button>
<form>
</div>
<!-- /.container-fluid -->
</div>
 
@endsection
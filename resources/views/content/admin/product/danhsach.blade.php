@extends('layout/masterLayout')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Product
<small>List</small>
</h1>
</div>
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr align="center">
<th>Mã sản phẩm</th>
<th>Tên Sản Phẩm</th>
<th>Size</th>
<th>Loại</th>
<th>CatalogID</th>
<th>Mô tả</th>
<th>Đơn giá</th>
<th>Giá</th>
<th>ẢnhID</th>
<th>Ảnh</th>
<th>Ngày Tạo</th>
<th>Ngày Update</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach ($sanpham as $sp): ?>
<tr class="odd gradeX" align="center">
<td>{{$sp->product_id}}</td>
<td>{{$sp->product_name}}</td>
<td>{{$sp->size}}</td>
<td>{{$sp->gender}}</td>
<td>{{$sp->product_catalog_id}}</td>
<td>{{$sp->discription}}</td>
<td>{{$sp->unit_price}}</td>
<td>{{$sp->promotion_price}}</td>
<td>{{$sp->image_id}}</td>
<td>{{$sp->view}}</td>
<td>{{$sp->created_at}}</td>
<td>{{$sp->updated_at}}</td>
<td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/prodcut/del/{{$sp->ProductID}}"> Delete</a></td>
<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$sp->ProductID}}">Edit</a></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
@endsection

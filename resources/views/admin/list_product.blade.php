@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm 
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Thể loại</th>
                                <th>Hình ảnh</th>
                                <th>Hãng</th>
                                <th>Size</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Cập nhập</th>
                                <th>Xóa</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $pro)
                            <tr class="odd gradeX" align="center">
                                <td>{{$pro->product_id}}</td>
                                <td>{{$pro->product_name}}</td>
                                <td>{{$pro->Category->name}}</td>
                                <td style="padding: 0; margin: 0; "><img src="image/product/{{$pro->image}}" width="50px" height="50px"></td>
                                <td>{{$pro->manafacture->name}}</td>
                                <td>{{$pro->size}}</td>
                                <td>{{$pro->description}}</td>
                                <td>{{$pro->unit_price}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/a">Edit</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaitin/xoa/a"> Delete</a></td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
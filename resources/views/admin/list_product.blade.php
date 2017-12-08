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
                        @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
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
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->name}}</td>
                                @if(isset($pro->Category->name))
                                <td>{{$pro->Category->name}}</td>
                                @endif
                                <td style="padding: 0; margin: 0; "><img src="image/product/{{$pro->image}}" width="50px" height="50px"></td>
                                @if(isset($pro->manafacture->name))
                                <td>{{$pro->manafacture->name}}</td>
                                @endif
                                <td>{{$pro->size}}</td>
                                <td>{{$pro->description}}</td>
                                <td>{{$pro->unit_price}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$pro->id}}">Edit</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/del/{{$pro->id}}"> Delete</a></td>
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
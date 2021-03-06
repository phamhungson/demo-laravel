@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Hãng sản xuất
                            <small></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if($errors->count() >0)
                            @foreach($errors->all() as $err)
                            <div class="alert alert-danger">{{$err}}</div>
                            @endforeach
                        @endif
                        @if(session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <form action="{{url('admin/manafacture/add')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Tên hãng</label>
                                <input class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label>Quốc gia</label>
                                <input class="form-control" name="country"/>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Xóa</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
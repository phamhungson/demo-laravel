@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update sản phẩm
                            <small> </small>
                        </h1>
                    </div>
                    @if($errors->count() > 0)
                        @foreach($errors->all() as $err)
                        <div class="alert alert-danger">{{$err}}</div>
                        @endforeach
                    @endif
                    @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                       
                        <form action="admin/product/edit{{$product->id}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Hãng sản phẩm</label>
                                <select class="form-control" name="manafacture_id">
                                  @foreach($man as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                   @endforeach 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name" value="{{$product->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input class="form-control" name="size" value="{{$product->size}}" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="gender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="product_catalog_id">
                                 
                                     @foreach($cat as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                   	@endforeach 
                                   
                                </select>
                            </div>
                            <div  class="form-group">
                                
                               <img src="image/product/{{$product->image}}" width="250px" height="250px">
                            </div>
                            <div  class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file"  name="image" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="unit_price" value="{{$product->unit_price}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description">{{$product->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Cập nhập</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                           
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
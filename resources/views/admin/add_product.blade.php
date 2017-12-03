@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản phẩm
                            <small> </small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Hãng sản phẩm</label>
                                <select class="form-control">
                                    <option value="0">Chọn hãng sản phẩm</option>
                                    <option value="">Vaio</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="txtCateName" />
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input class="form-control" name="txtOrder" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <input class="form-control" name="txtOrder" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <input type="file"  name="txtOrder" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="file"  name="txtOrder"  />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3"></textarea>
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
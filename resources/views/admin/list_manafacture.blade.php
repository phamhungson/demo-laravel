@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hãng sản xuất
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên hãng</th>
                                <th>Quốc gia</th>
                                <th>Mô tả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($man as $m)
                            <tr class="odd gradeX" align="center">
                                <td>{{$m->id}}</td>
                                <td>{{$m->name}}</td>
                                <td>{{$m->country}}</td>
                                <td>{{$m->description}}</td>
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
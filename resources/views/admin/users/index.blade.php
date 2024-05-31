@extends('layouts.adminbase')

@section('title','Create Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kullanıcılar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kullanıcılar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kullanıcılar listesi</h3>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.users.create')}}" class="btn btn-primary me-md-2 mb-1"><i class="bi bi-plus-lg"></i> Add user</a>
                    </div>

                    <!-- /.card-header -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th>Kullanıcı rolu</th>
                                <th>Ad</th>
                                <th>E-posta</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->role}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td><a href="{{route('admin.users.edit',['id'=>$rs->id])}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="{{route('admin.users.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                                    <td><a href="{{route('admin.users.show',['id'=>$rs->id])}}" class="btn btn-primary" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- partial -->
@endsection




@extends('layouts.userbase')

@section('title','User List')

@section('header')
    @include("user.layout.header")
@endsection

@section('sidebar')
    @include("user.layout.sidebar")
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kitaplar sayfası</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Ansayfa</a></li>
                            <li class="breadcrumb-item active">Kitaplar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                                <div class="card-tools">
                                    <form action="{{route('user.searchBooks')}}">
                                        @csrf
                                        <div class="input-group input-group-md">
                                            <input type="text" class="form-control" placeholder="Search book" name="query">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 25px;">id</th>
                                    <th>Parent id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th style="width: 60px;">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>{{$rs->author}}</td>
                                        <td style="width: 65px">
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" class="img1 rounded m-0"
                                                     style="width: 70px; height: 50px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('user.showBooks',['id'=>$rs->id])}}"
                                               class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i
                                                    class="bi bi-eye-fill"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- partial -->
@endsection

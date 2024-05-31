@extends('layouts.adminbase')

@section('title','Create Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
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
                    <h3 class="card-title">Title</h3>
                </div>
                <div class="card-body">
                    <div class="row nb-2  ml-2 mt-4 responsive">
                        <div class="col-sm-2 m-2">
                            <a href="{{route('admin.books.edit',['id'=>$data->id])}}" style="width: 150px" class="btn btn-block btn-success" data-toggle="tooltip" title="Edit">Edit</a>
                        </div>
                        <div class="col-sm-2 m-2">
                            <a href="{{route('admin.books.destroy',['id'=>$data->id])}}" style="width: 150px" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger" data-toggle="tooltip" title="Delete">Delete</a>
                        </div>
                    </div>
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <aside class="col-lg-4">
                                    <div class="gallery-wrap">
                                        <div class="img-big-wrap img-thumbnail d-block my-auto">
                                            <a href="{{Storage::url($data->image)}}" data-type="image" data-fslightbox="mygallery" target="_blank">
                                                <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->image)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                                <main class="col-lg-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Keyword</th>
                                            <td>{{$data->keywords}}</td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td>{{$data->author}}</td>
                                        </tr>
                                        <tr>
                                            <th>Publisher</th>
                                            <td>{{$data->publisher}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{$data->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                    </table>
                                </main>
                            </div>
                        </div>
                    </section>
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





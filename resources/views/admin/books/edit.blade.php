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
                    <form role="form" action="{{route('admin.books.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Parent</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="parent_id">
                                        <option value="0" selected="selected">Main catagory</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="author" value="{{$data->author}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="publisher" value="{{$data->publisher}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Page" class="col-sm-2 col-form-label">Page</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pages" value="{{$data->pages}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="image">
                                    @if($data->image)
                                        <img class="img-thumbnail" src="{{Storage::url($data->image)}}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="price" value="{{$data->price}}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

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






@extends('layouts.userbase')

@section('title','Create Category')

@section('header')
    @include("user.layout.header")
@endsection

@section('sidebar')
    @include("user.layout.sidebar")
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mesajlar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Mesajlar</li>
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
                    <h3 class="card-title">Mesajlar listesi</h3>
                </div>
                <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                    <a href="{{route('user.message.create')}}" class="btn btn-primary me-md-2 mb-1" onclick="return !window.open(this.href,'','top=50 left=100 width=950 height=730')" data-toggle="tooltip" title="Create"><i class="bi bi-plus-lg"></i> Yeni mesaj</a>
                </div>
                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th>Rolu / Gönderen</th>
                                <th>Rolu / Cevap veren</th>
                                <th>Gonderilen mesaj</th>
                                <th>Cevap verilen mesaj</th>
                                <th>Taih/Saat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->sender->role}} / {{$rs->sender->name}}</td>
                                    <td>
                                        @if($rs->receiver && $rs->receiver->name)
                                            {{$rs->receiver->role }} / {{$rs->receiver->name }}
                                        @else
                                            Yeni mesaj
                                        @endif
                                    </td>
                                    <td>{{$rs->sendedMessage}}</td>
                                    <td>
                                        @if($rs->receivedMessage)
                                            {{$rs->receivedMessage}}
                                        @else
                                            Cevap bekleniyor..
                                        @endif
                                    </td>
                                    <td>
                                        {{$rs->created_at}}
                                    </td>
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




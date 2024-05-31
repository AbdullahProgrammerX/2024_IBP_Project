@extends('layouts.userbase2')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yeni mesaj</h3>
                </div>
                <div class="card-body">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{$message}}
                        </div>
                    @endif
                    <form id="messageForm" role="form" action="{{ route('user.message.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="sendedMessage" class="col-sm-2 col-form-label">Mesaj yaz</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="sendedMessage" id="sendedMessage">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" >Gönder</button>
{{--                        href="{{redirect()->back()->getTargetUrl()}}"--}}
                    </form>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- partial -->
@endsection

@section('scripts')
    <script>
        function myFunction() {
            var txt;
            if (confirm("Gönderilsin mi?")) {
                txt = "Gönderildi!";
            } else {
                txt = "Gönderilmedi!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>

@endsection

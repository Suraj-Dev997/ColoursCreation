@extends('frontend.layouts.adminmain')

@section('adminmain-container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">



                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Images</h3>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ url('/videomange') }}"> Back</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ url('/createvideo') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Enter Video Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Video Title" name="title">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Embed Code </label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Embed Code " name="link">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

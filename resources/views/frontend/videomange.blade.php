@extends('frontend.layouts.adminmain')

@section('adminmain-container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="HeadingC">Manges Videos</h1>
                    </div>
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
                                <h3 class="card-title">Videos</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-success" href="{{ url('/videomange/add') }}"> Add new</a>
                                </div>

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="theadc">
                                        <tr>
                                            <th>Titel of Video</th>
                                            <th>Emmbeded Code</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $video)
                                            <tr>
                                                <td>{{ $video->title }}</td>
                                                <td>{{ $video->link }}</td>
                                                <td><a href="{{ url('video/delete/') }}/{{ $video->id }}"> <button
                                                            type="button" class="btn btn-danger btn-sm">Delete</button></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

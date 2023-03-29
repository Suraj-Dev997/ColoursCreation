@extends('frontend.layouts.adminmain')

@section('adminmain-container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="HeadingC">Manage Photos</h1>
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
                                <h3 class="card-title">Photos</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-success" href="{{ route('products.create') }}"> Add new</a>
                                </div>

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="theadc">
                                        <tr>
                                            <th>Name</th>
                                            <th>Details</th>
                                            <th>Images</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->detail }}</td>
                                                <td><img src="/image/{{ $product->image }}" alt=""
                                                        style="width: 100px"></td>
                                                <td>
                                                    <form action="{{ route('products.destroy', $product->id) }}"
                                                        method="POST">

                                                        {{-- <a class="btn btn-info"
                                                            href="{{ route('products.show', $product->id) }}">Show</a> --}}

                                                        <a class="btn btn-primary"
                                                            href="{{ route('products.edit', $product->id) }}">Edit</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
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

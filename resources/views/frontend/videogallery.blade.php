@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Our</h4>
                        <h2>Video Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>

                            <li class="tablinks ">Videos</li>

                        </ul>
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            @foreach ($videos as $video)
                                <div class="col-lg-4 col-md-4 all ">
                                    <div class="product-item">
                                        <iframe width="100%" height="245"
                                            src="https://www.youtube.com/embed/{{ $video->link }}">
                                        </iframe>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>

                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
